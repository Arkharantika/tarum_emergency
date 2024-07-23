<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ImportExcel;
use App\Exports\ExportExcel;
use App\Models\Hardware;
use DB;
// use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Facades\Excel;

class ImportExportController extends Controller
{
    public function import() 
    {
        Excel::import(new ImportExcel,request()->file('file'));
             
        return back();
    }

    public function export(Request $request,$id)
    {
        $chance = strval($id);
        $awal = $request->startdate;
        $akhir = $request->enddate;
        $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();

        if($request->pilihan == 'harian'){

            $records = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->whereBetween('trs_raw_d_wl.created_at', [$request->startdate, $request->enddate])
                    ->select(DB::raw('DATE(trs_raw_d_wl.created_at) as hari'), DB::raw('AVG(trs_raw_d_wl.value) as nilai'))
                    ->groupBy('hari')
                    ->get();

            $data = [];
            $count = 0;
            foreach($records as $kampret => $jungul)
            {
                $count++;
                $data[$count]= [strval($count),strval($jungul->nilai),strval($jungul->hari)];
            }
            $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
            $nama_pos = $recorddetail->pos_name;
            $lokasi = $recorddetail->location;
            $latitude = $recorddetail->latitude;
            $longitude = $recorddetail->longitude;
            $export = new ExportExcel($data,$nama_pos,$lokasi,$latitude,$longitude);
        
            return Excel::download($export, 'Donwload.xlsx');
        }
        if($request->pilihan == 'interval kirim')
        {
            $records = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->whereBetween('trs_raw_d_wl.created_at', [$request->startdate, $request->enddate])
                    ->select(DB::raw('(trs_raw_d_wl.created_at) as hari'), DB::raw('(trs_raw_d_wl.value) as nilai'))
                    // ->groupBy('hari')
                    ->get();
    
                    $data = [];
            $count = 0;
            foreach($records as $kampret => $jungul)
            {
                $count++;
                $data[$count]= [strval($count),strval($jungul->nilai),strval($jungul->hari)];
            }
            $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
            $nama_pos = $recorddetail->pos_name;
            $lokasi = $recorddetail->location;
            $latitude = $recorddetail->latitude;
            $longitude = $recorddetail->longitude;
            $export = new ExportExcel($data,$nama_pos,$lokasi,$latitude,$longitude);
        
            return Excel::download($export, 'Donwload.xlsx');
        }
        if($request->pilihan == 'bulanan')
        {
            $records = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')
                ->where('mst_hardware.kd_hardware', $id)
                ->whereBetween('trs_raw_d_wl.created_at', [$request->startdate, $request->enddate])
                ->select(
                    DB::raw('DATE_FORMAT(trs_raw_d_wl.created_at, "%Y-%m") as hari'),
                    DB::raw('AVG(trs_raw_d_wl.value) as nilai')
                )
                ->groupBy('hari')
                ->get();

            $data = [];
            $count = 0;
            foreach($records as $kampret => $jungul)
            {
                $count++;
                $data[$count]= [strval($count),strval($jungul->nilai),strval($jungul->hari)];
            }
            $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
            $nama_pos = $recorddetail->pos_name;
            $lokasi = $recorddetail->location;
            $latitude = $recorddetail->latitude;
            $longitude = $recorddetail->longitude;
            $export = new ExportExcel($data,$nama_pos,$lokasi,$latitude,$longitude);
        
            return Excel::download($export, 'Donwload.xlsx');
        }
    }
}
