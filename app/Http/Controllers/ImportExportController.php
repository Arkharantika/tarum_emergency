<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ImportExcel;
use App\Exports\ExportExcel;
use App\Exports\TransactionsExport;
use App\Exports\MonthlyExport;
use App\Exports\YearlyExport;
use App\Models\Hardware;
use DB;
use Carbon\Carbon;
// use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Facades\Excel;

class ImportExportController extends Controller
{
    public function exportYearly(Request $request, $id)
    {
        // return 0;
        $date1 = $request->startdate;
        $date2 = $request->enddate;
        $hardwarenya = $id;
        return Excel::download(new YearlyExport($date1,$date2,$hardwarenya), 'transactionsYearly.xlsx');
    }

    public function exportMonthly(Request $request, $id)
    {
        // return $id;
        $date1 = $request->startdate;
        $date2 = $request->enddate;
        $hardwarenya = $id;
        return Excel::download(new MonthlyExport($date1,$date2,$hardwarenya), 'transactionsMonthly.xlsx');
    }

    public function exportContoh(Request $request, $id)
    {
        // return $request;
        $date1 = $request->startdate;
        $date2 = $request->enddate;
        $hardwarenya = $id;
        return Excel::download(new TransactionsExport($date1,$date2,$hardwarenya), 'transactionsAll.xlsx');

        // >>>>>>>>>>>>>>>>>>>>>> KEEP IT
        // $excelFileName = 'users.xlsx';
        // $excelFilePath = storage_path('app/' . $excelFileName);
        // $date1 = '12-01-2024 00:00:00';
        // $date2 = '12-02-2024 00:00:00';
        
        // Excel::store(new TransactionsExport($date1,$date2), $excelFileName);

        // $zipFileName = 'users.zip';
        // $zipFilePath = storage_path('app/' . $zipFileName);

        // $zip = new ZipArchive();
        // $zip->open($zipFilePath, ZipArchive::CREATE);
        // $zip->addFile($excelFilePath, $excelFileName);
        // $zip->close();

        // return response()->download($zipFilePath)->deleteFileAfterSend(true);
    }

    public function import() 
    {
        Excel::import(new ImportExcel,request()->file('file'));
             
        return back()->with('message','Data berhasil di import ! ');
    }

    public function export(Request $request,$id)
    {
        $chance = strval($id);
        $awal = $request->startdate;
        $akhir = $request->enddate;
        $recorddetail = Hardware::where('kd_hardware',$id)->get()->last();
        $startDate = Carbon::parse($request->startdate)->startOfDay(); // Convert to datetime object and set to start of the day
        $endDate = Carbon::parse($request->enddate)->endOfDay();
        if($request->pilihan == 'harian'){

            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                    ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                    ->select(DB::raw('DATE(trs_raw_d_gpa.tlocal) as hari'), DB::raw('AVG(trs_raw_d_gpa.value) as nilai'))
                    ->groupBy('hari')
                    ->get();
            // return $records;

            $data = [];
            $count = 0;
            foreach($records as $kampret => $jungul)
            {
                $count++;
                $data[$count]= [strval($count),strval($jungul->hari),strval(($jungul->nilai)-($recorddetail->k_tma))];
            }
            // $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
            $nama_pos = $recorddetail->pos_name;
            $lokasi = $recorddetail->location;
            $latitude = $recorddetail->latitude;
            $longitude = $recorddetail->longitude;
            $provinsi = $recorddetail->kd_provinsi;
            $kabupaten = $recorddetail->kd_kabupaten;
            $kecamatan = $recorddetail->kd_kecamatan;
            $desa = $recorddetail->kd_desa;
            $export = new ExportExcel($data,$nama_pos,$lokasi,$latitude,$longitude,$provinsi,$kabupaten,$kecamatan,$desa);
        
            return Excel::download($export, 'Donwload.xlsx');
        }
        if($request->pilihan == 'interval kirim')
        {
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                    ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                    ->select(DB::raw('(trs_raw_d_gpa.tlocal) as hari'), DB::raw('(trs_raw_d_gpa.value) as nilai'))
                    // ->groupBy('hari')
                    // ->get();
                    // ->groupBy('hari')
                    ->get();
    
                    $data = [];
            $count = 0;
            foreach($records as $kampret => $jungul)
            {
                $count++;
                $data[$count]= [strval($count),strval($jungul->hari),strval(($jungul->nilai)-($recorddetail->k_tma))];
            }
            // $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
            $nama_pos = $recorddetail->pos_name;
            $lokasi = $recorddetail->location;
            $latitude = $recorddetail->latitude;
            $longitude = $recorddetail->longitude;
            $provinsi = $recorddetail->kd_provinsi;
            $kabupaten = $recorddetail->kd_kabupaten;
            $kecamatan = $recorddetail->kd_kecamatan;
            $desa = $recorddetail->kd_desa;
            $export = new ExportExcel($data,$nama_pos,$lokasi,$latitude,$longitude,$provinsi,$kabupaten,$kecamatan,$desa);
        
            return Excel::download($export, 'Donwload.xlsx');
        }
        if($request->pilihan == 'bulanan')
        {
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                    ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                ->select(
                    DB::raw('DATE_FORMAT(trs_raw_d_gpa.tlocal, "%Y-%m") as hari'),
                    DB::raw('AVG(trs_raw_d_gpa.value) as nilai')
                )
                ->groupBy('hari')
                ->get();

            $data = [];
            $count = 0;
            foreach($records as $kampret => $jungul)
            {
                $count++;
                $data[$count]= [strval($count),strval($jungul->hari),strval(($jungul->nilai)-($recorddetail->k_tma))];
            }
            // $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
            $nama_pos = $recorddetail->pos_name;
            $lokasi = $recorddetail->location;
            $latitude = $recorddetail->latitude;
            $longitude = $recorddetail->longitude;
            $provinsi = $recorddetail->kd_provinsi;
            $kabupaten = $recorddetail->kd_kabupaten;
            $kecamatan = $recorddetail->kd_kecamatan;
            $desa = $recorddetail->kd_desa;
            $export = new ExportExcel($data,$nama_pos,$lokasi,$latitude,$longitude,$provinsi,$kabupaten,$kecamatan,$desa);
        
            return Excel::download($export, 'Donwload.xlsx');
        }

	if($request->pilihan == 'interval 10')
        {
            $startDate = Carbon::parse($request->startdate)->startOfMinute();
            $endDate = Carbon::parse($request->enddate)->endOfMinute();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                ->where('mst_hardware.kd_hardware', $id)
                ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                ->select(DB::raw('FROM_UNIXTIME(CEIL(UNIX_TIMESTAMP(trs_raw_d_gpa.tlocal) / (60*10)) * 60 * 10) as hari'), DB::raw('AVG(trs_raw_d_gpa.value) as nilai'))
                ->groupBy('hari')
                ->get();

            $data = [];
            $count = 0;
            foreach($records as $kampret => $jungul)
            {
                $count++;
                $data[$count]= [strval($count),strval($jungul->hari),strval(($jungul->nilai)-($recorddetail->k_tma))];
            }
            // $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
            $nama_pos = $recorddetail->pos_name;
            $lokasi = $recorddetail->location;
            $latitude = $recorddetail->latitude;
            $longitude = $recorddetail->longitude;
            $provinsi = $recorddetail->kd_provinsi;
            $kabupaten = $recorddetail->kd_kabupaten;
            $kecamatan = $recorddetail->kd_kecamatan;
            $desa = $recorddetail->kd_desa;
            $export = new ExportExcel($data,$nama_pos,$lokasi,$latitude,$longitude,$provinsi,$kabupaten,$kecamatan,$desa);
        
            return Excel::download($export, 'Donwload.xlsx');
        }

        if($request->pilihan == 'interval 30mnt')
        {
            $startDate = Carbon::parse($request->startdate)->startOfMinute();
            $endDate = Carbon::parse($request->enddate)->endOfMinute();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                ->where('mst_hardware.kd_hardware', $id)
                ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                ->select(DB::raw('FROM_UNIXTIME(CEIL(UNIX_TIMESTAMP(trs_raw_d_gpa.tlocal) / (60*30)) * 60 * 30) as hari'), DB::raw('AVG(trs_raw_d_gpa.value) as nilai'))
                ->groupBy('hari')
                ->get();

            $data = [];
            $count = 0;
            foreach($records as $kampret => $jungul)
            {
                $count++;
                $data[$count]= [strval($count),strval($jungul->hari),strval(($jungul->nilai)-($recorddetail->k_tma))];
            }
            // $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
            $nama_pos = $recorddetail->pos_name;
            $lokasi = $recorddetail->location;
            $latitude = $recorddetail->latitude;
            $longitude = $recorddetail->longitude;
            $provinsi = $recorddetail->kd_provinsi;
            $kabupaten = $recorddetail->kd_kabupaten;
            $kecamatan = $recorddetail->kd_kecamatan;
            $desa = $recorddetail->kd_desa;
            $export = new ExportExcel($data,$nama_pos,$lokasi,$latitude,$longitude,$provinsi,$kabupaten,$kecamatan,$desa);
        
            return Excel::download($export, 'Donwload.xlsx');
        }

        if($request->pilihan == 'interval jam')
        {
            $startDate = Carbon::parse($request->startdate)->startOfHour(); // Convert to datetime object and set to start of the hour
            $endDate = Carbon::parse($request->enddate)->endOfHour();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                ->where('mst_hardware.kd_hardware', $id)
                ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                ->select(DB::raw('DATE_FORMAT(trs_raw_d_gpa.tlocal, "%Y-%m-%d %H:00:00") as hari'), DB::raw('AVG(trs_raw_d_gpa.value) as nilai'))
                ->groupBy('hari')
                ->get();

            $data = [];
            $count = 0;
            foreach($records as $kampret => $jungul)
            {
                $count++;
                $data[$count]= [strval($count),strval($jungul->hari),strval(($jungul->nilai)-($recorddetail->k_tma))];
            }
            // $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
            $nama_pos = $recorddetail->pos_name;
            $lokasi = $recorddetail->location;
            $latitude = $recorddetail->latitude;
            $longitude = $recorddetail->longitude;
            $provinsi = $recorddetail->kd_provinsi;
            $kabupaten = $recorddetail->kd_kabupaten;
            $kecamatan = $recorddetail->kd_kecamatan;
            $desa = $recorddetail->kd_desa;
            $export = new ExportExcel($data,$nama_pos,$lokasi,$latitude,$longitude,$provinsi,$kabupaten,$kecamatan,$desa);
        
            return Excel::download($export, 'Donwload.xlsx');
        }
    }
}
