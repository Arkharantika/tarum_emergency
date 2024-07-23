<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

use App\Models\Hardware;
use App\Models\RawData;

class HardwareController extends Controller
{
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    public function HardwareDetailData($id)
    {
     	//return 'kentang';   
        $chance = strval($id);
         //return $chance;
        $records = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get();
        $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
	//$records = Hardware::all();
        //return $records;
        return view('hardwaredetail',compact('records','chance','recorddetail'));
    }

    public function HardwareDetailTable($id)
    {
        $chance = strval($id);
        $awal=null;
        $akhir=null;
        $records = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get();
        $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
        $records = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->select(DB::raw('(trs_raw_d_wl.created_at) as hari'), DB::raw('(trs_raw_d_wl.value) as nilai'))
                    ->get();

        return view('hardwaredetailtable',compact('records','chance','recorddetail','awal','akhir'));
    }

    public function HardwareDetailGraph($id)
    {
        $chance = strval($id);
        $awal=null;
        $akhir=null;
        // $records = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get();
        $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
        $records = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->select(DB::raw('(trs_raw_d_wl.created_at) as hari'), DB::raw('(trs_raw_d_wl.value) as nilai'))
                    ->get();
        
        return view('hardwaredetailgraph',compact('records','chance','recorddetail','awal','akhir'));
    }

    public function SelectGraphFromDateRange(Request $request,$id)
    {
        $chance = strval($id);
        // return $request;
        $awal = $request->startdate;
        $akhir = $request->enddate;
        $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
        // return $request;
        if($request->pilihan == 'interval kirim'){
            $records = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->whereBetween('trs_raw_d_wl.created_at', [$request->startdate, $request->enddate])
                    ->select(DB::raw('(trs_raw_d_wl.created_at) as hari'), DB::raw('(trs_raw_d_wl.value) as nilai'))
                    // ->groupBy('hari')
                    ->get();
    
            return view('hardwaredetailgraph',compact('records','chance','recorddetail','awal','akhir'));
        }
        if($request->pilihan == 'harian'){
            $records = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->whereBetween('trs_raw_d_wl.created_at', [$request->startdate, $request->enddate])
                    ->select(DB::raw('DATE(trs_raw_d_wl.created_at) as hari'), DB::raw('AVG(trs_raw_d_wl.value) as nilai'))
                    ->groupBy('hari')
                    ->get();

            return view('hardwaredetailgraph',compact('records','chance','recorddetail','awal','akhir'));
        }
        if($request->pilihan == 'bulanan'){
            $records = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')
                ->where('mst_hardware.kd_hardware', $id)
                ->whereBetween('trs_raw_d_wl.created_at', [$request->startdate, $request->enddate])
                ->select(
                    DB::raw('DATE_FORMAT(trs_raw_d_wl.created_at, "%Y-%m") as hari'),
                    DB::raw('AVG(trs_raw_d_wl.value) as nilai')
                )
                ->groupBy('hari')
                ->get();
            // return $records;
            return view('hardwaredetailgraph',compact('records','chance','recorddetail','awal','akhir'));
        }
    }

    public function SelectDataFromDateRange(Request $request,$id)
    {
        // return $request;
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

            return view('hardwaredetailtable',compact('records','chance','recorddetail','awal','akhir'));
            // return $records;
        }
        if($request->pilihan == 'interval kirim')
        {
            $records = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->whereBetween('trs_raw_d_wl.created_at', [$request->startdate, $request->enddate])
                    ->select(DB::raw('(trs_raw_d_wl.created_at) as hari'), DB::raw('(trs_raw_d_wl.value) as nilai'))
                    // ->groupBy('hari')
                    ->get();
    
                    return view('hardwaredetailtable',compact('records','chance','recorddetail','awal','akhir'));
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
            // return $records;
            return view('hardwaredetailtable',compact('records','chance','recorddetail','awal','akhir'));
        }

    }
}
