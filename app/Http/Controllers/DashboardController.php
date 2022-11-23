<?php

namespace App\Http\Controllers;
use App\Models\DataKebakaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    
    public function grafik(Request $request){        
        
        $tglSekarang = date('Ymd');
        $kemarin = date('Ymd', strtotime("-1 day", strtotime(date("Ymd"))));
        $bulanSekarang = date('Ym');
        $tahunSekarang = date('Y');

        
        // $pecah = substr("$date", 14,7);
        // $explode = explode("-",$pecah);
        // $tanggal = $explode[1]. $explode[0];
        
        $dataTglSekarang = DB::table('data_kebakaran')                    
        ->where('kebakaran_tanggal','like','%'.$tglSekarang.'%')   
        ->count();

        $dataKemarin = DB::table('data_kebakaran')                    
        ->where('kebakaran_tanggal','like','%'.$kemarin.'%')   
        ->count();

        $dataBulanSekarang = DB::table('data_kebakaran')                    
        ->where('kebakaran_tanggal','like','%'.$bulanSekarang.'%')   
        ->count();

        $dataTahunSekarang = DB::table('data_kebakaran')                    
        ->where('kebakaran_tanggal','like','%'.$tahunSekarang.'%')   
        ->count();        

        $data = DB::table('data_kebakaran')->select('kebakaran_provinsi')->get();
        // $barchart = DB::table('data_kebakaran')
        //             ->select('kebakaran_provinsi', DB::raw('COUNT(*) as total'))                    
        //             ->groupBy('kebakaran_provinsi')
        //             ->get();

        // $lineChart = DB::table('data_kebakaran')                    
        //             ->select('kebakaran_tanggal', DB::raw('COUNT(*) as jumlah'))                                        
        //             ->groupBy('kebakaran_tanggal')
        //             ->get();

        $tahun = ["2016","2017","2018","2019"];

        // $map = DB::table('data_kebakaran')               
        //        ->get();

        // $provinsi = [];
        // $tanggalr = [];
        // $waktu = [];
        // $bulan = [];
        // $jumlah = [];         
        // foreach($map as $value){
        //     $provinsi[] = $value->kebakaran_provinsi;
        //     $tanggalr[] = $value->kebakaran_tanggal;
        //     $waktu[] = $value->kebakaran_waktu;
        // }
        // dd($provinsi, $tanggalr, $waktu);//
        // foreach($lineChart as $value){
        //     $bulan[] = substr($value->kebakaran_tanggal,0,6);
        //     $jumlah[] = $value->jumlah;                        
        //     // $tes = $value->kebakaran_tanggal->explode('-');
        // }

        $data= ['tahun' => $tahun, 
                'dataTglSekarang' => $dataTglSekarang,
                'dataKemarin' => $dataKemarin,
                'dataBulanSekarang' => $dataBulanSekarang,
                'dataTahunSekarang' => $dataTahunSekarang];
        
        // dd($provinsi, $total);

        return view('dashboard.index', $data);
    }
    public function getLineChart(Request $request){
        $tahunselect = $_GET['tahun'];
       if (isset($_GET['tahun'])){
            // $tahunSelected = $_GET['tahun'];
            $tahunSelected = $tahunselect;

            $januaryData = DB::table('data_kebakaran')                    
            ->where('kebakaran_tanggal','like','%'.$tahunSelected.'01%')   
            ->count();

            $februariData = DB::table('data_kebakaran')                    
            ->where('kebakaran_tanggal','like','%'.$tahunSelected.'02%')   
            ->count();

            $maretData = DB::table('data_kebakaran')                    
            ->where('kebakaran_tanggal','like','%'.$tahunSelected.'03%')   
            ->count();

            $aprilData = DB::table('data_kebakaran')                    
            ->where('kebakaran_tanggal','like','%'.$tahunSelected.'04%')   
            ->count();

            $meiData = DB::table('data_kebakaran')                    
            ->where('kebakaran_tanggal','like','%'.$tahunSelected.'05%')   
            ->count();

            $juniData = DB::table('data_kebakaran')                    
            ->where('kebakaran_tanggal','like','%'.$tahunSelected.'06%')   
            ->count();

            $juliData = DB::table('data_kebakaran')                    
            ->where('kebakaran_tanggal','like','%'.$tahunSelected.'07%')   
            ->count();

            $agustusData = DB::table('data_kebakaran')                    
            ->where('kebakaran_tanggal','like','%'.$tahunSelected.'08%')   
            ->count();

            $septemberData = DB::table('data_kebakaran')                    
            ->where('kebakaran_tanggal','like','%'.$tahunSelected.'09%')   
            ->count();

            $oktoberData = DB::table('data_kebakaran')                    
            ->where('kebakaran_tanggal','like','%'.$tahunSelected.'10%')   
            ->count();

            $novemberData = DB::table('data_kebakaran')                    
            ->where('kebakaran_tanggal','like','%'.$tahunSelected.'11%')   
            ->count();

            $desemberData = DB::table('data_kebakaran')                    
            ->where('kebakaran_tanggal','like','%'.$tahunSelected.'12%')   
            ->count();

            return json_encode(array(
                'status' => 200,
                'message' => 'showing '.$_GET['tahun'].' data',
                'data' => array(
                    $januaryData,
                    $februariData,
                    $maretData,
                    $aprilData,
                    $meiData,
                    $juniData,
                    $juliData,
                    $agustusData,
                    $septemberData,
                    $oktoberData,
                    $novemberData,
                    $desemberData
                )
            )); 
       }

       return json_encode(array(
            'status' => 200,
            'message' => 'showing all data',
            'data' => []
       ));         
    }

    public function getBarChart(){
        if (isset($_GET['tahun'])){
            $tahunSelected = $_GET['tahun'];

            $barchart = DB::table('data_kebakaran')
            ->select('kebakaran_provinsi', DB::raw('COUNT(*) as total'))                    
            ->where('kebakaran_tanggal','like','%'.$tahunSelected.'%')
            ->groupBy('kebakaran_provinsi')
            ->get();

            $provinsi = [];
            $total = [];
            $bulan = [];
            $jumlah = [];
            $tes = []; 
            foreach($barchart as $value){
                $provinsi[] = $value->kebakaran_provinsi;
                $total[] = $value->total;
            }
            return json_encode(array(
                'status' => 200,
                'message' => 'showing '.$_GET['tahun'].' data',
                'data' => array(                    
                    'provinsi' => $provinsi,
                    'total' => $total
                )
            )); 
       }

       return json_encode(array(
            'status' => 200,
            'message' => 'showing all data',
            'data' => []
       )); 
    }
}
