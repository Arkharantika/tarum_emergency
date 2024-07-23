<?php

namespace App\Exports;

use App\Models\RawGPA;
use App\Models\Hardware;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Illuminate\Support\Collection;

use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Borders;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Events\AfterSheet;

class TransactionsExport implements FromCollection,WithEvents,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // use Illuminate\Support\Collection;
    protected $date1;
    protected $date2;
    protected $hardwarenya;

    public function __construct($date1, $date2, $hardwarenya)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
        $this->hardwarenya = $hardwarenya;
    }

    public function collection()
    {
        $date1Formatted = date('Y-m-d', strtotime($this->date1));
        $date2Formatted = date('Y-m-d', strtotime($this->date2));

        // Fetch transactions as a collection
        $transactions = RawGPA::where('kd_hardware',$this->hardwarenya )
            ->where('kd_sensor', 'waterlevel')
            ->whereDate('tlocal', '>=', $date1Formatted)
            ->whereDate('tlocal', '<=', $date2Formatted)
            ->get();

        // Group transactions by date using collection's groupBy method
        $groupedTransactions = $transactions->groupBy(function ($transaction) {
            $tlocal = \DateTime::createFromFormat('Y-m-d H:i:s', $transaction->tlocal);
            return $tlocal->format('d-m-Y');
        });

        // Initialize the rows array
        $rows = [];

        // Initialize cell counter
        $cellCounter = 0;

        // Iterate over grouped transactions
        foreach ($groupedTransactions as $date => $dateTransactions) {
            // Add date as a header row
            $rows[] = [''];
            $maxValue = $dateTransactions->max('value');
            $minValue = $dateTransactions->min('value');
        
            // Add date and max value as header row
            $rows[] = ['Tanggal: ','' . $date,' ','Max Value of the Day ', $maxValue,' ','Min Value of the Day ', $minValue];

            // Add time and value data to each row
            $rowData = [];
            foreach ($dateTransactions as $transaction) {
                $tlocalFormatted = \DateTime::createFromFormat('Y-m-d H:i:s', $transaction->tlocal)->format('H:i:s');
                $rowData[] = $tlocalFormatted;
                $rowData[] = $transaction->value;

                // Increase cell counter
                $cellCounter += 2;

                // Start a new row after every 24 cells
                if ($cellCounter >= 24) {
                    $rows[] = $rowData;
                    $rowData = [];
                    $cellCounter = 0;
                }
            }

            // Add remaining cells to the row
            if (!empty($rowData)) {
                $rows[] = $rowData;
            }
        }

        return new Collection($rows);
    }

    public function headings(): array
    {
        // Define column headings
        $information = Hardware::where('kd_hardware', $this->hardwarenya)
            ->get()->first();

        return [[
            'Nama POS',
            $information->pos_name,
            // $this->additionalVariable,
        ],[
            'Lokasi',
            $information->location,
        ],[
            'Latitude',
            $information->latitude,
        ],[
            'Longitude',
            $information->longitude,
        ],[
            'Provinsi',
            $information->kd_provinsi,
        ],[
            'Kabupaten',
            $information->kd_kabupaten,
        ],[
            'Kecamatan',
            $information->kd_kecamatan,
        ],[
            'Desa',
            $information->kd_desa,
        ],['','']
    ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $this->sheet = $event->sheet;

                // Apply border styling
                $this->applyBorders();
            },
        ];
    }

    protected function applyBorders()
    {
        $highestRow = $this->sheet->getHighestRow();
        
        // Iterate over the rows to find rows with "Tanggal"
        for ($row = 1; $row <= $highestRow; $row++) {
            $cellValue = $this->sheet->getCell('A' . $row)->getValue(); // Assuming "Tanggal" could be in column A
            if (strpos($cellValue, 'Tanggal') !== false) {
                // Apply border to the entire row
                $this->sheet->getStyle('A' . $row . ':X' . $row)->applyFromArray([
                    'borders' => [
                        'bottom' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['argb' => 'FF000000'],
                        ],
                    ],
                ]);
            }
        }
    }
    
}
