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
use DB;
use Carbon\Carbon;
use ZipArchive;

class MonthlyExport implements FromCollection,WithHeadings,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    protected $date1;
    protected $date2;
    protected $hardwarenya;

    public function __construct($date1, $date2, $hardwarenya)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
        $this->hardwarenya = $hardwarenya;
        // $this->transaction = $transaction;
    }

    public function collection()
    {
        $date1Formatted = date('Y-m-d', strtotime($this->date1));
        $date2Formatted = date('Y-m-d', strtotime($this->date2));
        // $transaction = $this->transaction;

        $transaction = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
            ->where('mst_hardware.kd_hardware', $this->hardwarenya)
            ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
            ->whereBetween('trs_raw_d_gpa.tlocal', [$date1Formatted, $date2Formatted])
            ->select(DB::raw('DATE_FORMAT(trs_raw_d_gpa.tlocal, "%Y-%m-%d %H:00:00") as hari'), DB::raw('AVG(trs_raw_d_gpa.value) as nilai'))
            ->groupBy('hari')
            ->get();

        // Group data by month
        $groupedData = $transaction->groupBy(function($item) {
            // Convert $item->hari to a DateTime object
            $hariDateTime = \DateTime::createFromFormat('Y-m-d H:i:s', $item->hari);
        
            // Check if conversion was successful
            if ($hariDateTime !== false) {
                // Format the DateTime object
                return $hariDateTime->format('F Y');
            } else {
                // Handle the case where conversion failed (if needed)
                return 'Invalid Date';
            }
        });
        
        $formattedData = [];

        foreach ($groupedData as $month => $data) {
            $formattedData[] = [''];
            $formattedData[] = [$month];
            $formattedData[] = ['date', '00-01', '01-02', '02-03', '03-04', '04-05', '05-06', '06-07', '07-08', '08-09', '09-10', '10-11', '11-12', '12-13', '13-14', '14-15', '15-16', '16-17', '17-18', '18-19', '19-20', '20-21', '21-22', '22-23', '23-00', 'total'];
        
            // Prepare an array to hold values for each day
            $dailyValues = [];
        
            foreach ($data as $row) {
                $hariDateTime = \DateTime::createFromFormat('Y-m-d H:i:s', $row->hari);
                $day = $hariDateTime->format('d-m-Y');
        
                // Initialize daily values if not yet initialized
                if (!isset($dailyValues[$day])) {
                    $dailyValues[$day] = array_fill(0, 24, 0); // Initialize with 24 zeros
                }
        
                // Extract the hour from the timestamp and update the corresponding value
                $hour = intval($hariDateTime->format('H'));
                $dailyValues[$day][$hour] = $row->nilai;
            }
        
            // Process the daily values
            foreach ($dailyValues as $day => $values) {
                $formattedRow = [$day];
                $total = 0;
        
                foreach ($values as $value) {
                    $formattedRow[] = $value;
                    if($value!=null){
                        $total += 1;
                    }
                }
        
                $formattedRow[] = $total;
                $formattedData[] = $formattedRow;
            }
        }
        

        return new Collection($formattedData);
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
            if (strpos($cellValue, 'date') !== false) {
                // Apply border to the entire row
                $this->sheet->getStyle('A' . $row . ':X' . $row)->applyFromArray([
                    'borders' => [
                        'bottom' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['argb' => 'FF000000'],
                        ],
                        'top' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['argb' => 'FF000000'],
                        ],
                    ],
                ]);
            }
        }
    }
}
