<?php

namespace App\Exports;

use App\Models\RawGPA;
use App\Models\Hardware;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Borders;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Facades\Excel;

use DB;
use Carbon\Carbon;
use ZipArchive;

class YearlyExport implements FromCollection, WithHeadings, WithEvents
{
    protected $date1;
    protected $date2;

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

        $transactions = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
            ->where('mst_hardware.kd_hardware', $this->hardwarenya)
            ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
            ->whereBetween('trs_raw_d_gpa.tlocal', [$date1Formatted, $date2Formatted])
            ->select(DB::raw('DAY(trs_raw_d_gpa.tlocal) as day'), DB::raw('MONTH(trs_raw_d_gpa.tlocal) as month'), DB::raw('AVG(trs_raw_d_gpa.value) as value'))
            ->groupBy('day', 'month')
            ->get();

        // Group transactions by year
        $groupedTransactions = $transactions->groupBy(function ($transaction) {
            return Carbon::parse($transaction->tlocal)->format('Y');
        });

        // Prepare the collection for export
        $exportCollection = collect();

        // Loop through each year
        foreach ($groupedTransactions as $year => $yearlyTransactions) {
            // Initialize a row for the year
            for ($day = 1; $day <= 31; $day++) {
                $monthlyRow = collect(['day' => $day]);

                // Loop through each month
                for ($month = 1; $month <= 12; $month++) {
                    // Find the transaction for the current day and month
                    $transaction = $yearlyTransactions->where('month', $month)->where('day', $day)->first();

                    // Get the value or set it to null if not found
                    $value = $transaction ? $transaction->value : null;

                    // Append the value to the row
                    $monthlyRow->push($value);
                }

                // Append the row to the export collection
                $exportCollection->push($monthlyRow);
            }
        }

        return $exportCollection;
    }

    public function headings(): array
    {
        // Prepare the headings
        $year = date('Y', strtotime($this->date1));
        // $year = date("Y", strtotime($date));

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
        ],['Tahun',$year],[''],['day', 'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'des']];
        // return ['day', 'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'des'];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();

                // Set header styles
                $sheet->getStyle('A11:M11')->applyFromArray([
                    'font' => [
                        'bold' => true,
                    ],
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_CENTER,
                        'vertical' => Alignment::VERTICAL_CENTER,
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => 'F2F2F2'],
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['rgb' => 'D3D3D3'],
                        ],
                    ],
                ]);

                // Set cell styles
                $sheet->getStyle('A2:M' . ($sheet->getHighestRow()))->applyFromArray([
                    'font' => [
                        'name' => 'Calibri',
                        'size' => 11,
                    ],
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_CENTER,
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['rgb' => 'D3D3D3'],
                        ],
                    ],
                ]);

                // Set column widths
                foreach (range('A', 'M') as $col) {
                    $sheet->getColumnDimension($col)->setWidth(12);
                }

                // Set page orientation and size
                $sheet->getPageSetup()->setOrientation(PageSetup::ORIENTATION_LANDSCAPE);
                $sheet->getPageSetup()->setPaperSize(PageSetup::PAPERSIZE_A4);
            },
        ];
    }
}
