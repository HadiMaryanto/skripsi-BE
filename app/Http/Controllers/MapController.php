<?php

namespace App\Http\Controllers;

use App\Models\DataKebakaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $map = DB::table('data_kebakaran')
            ->get();

        $tanggal = [];
        $waktu = [];
        $satelit = [];
        $latitude = [];
        $longitude = [];
        $provinsi = [];
        $kabupaten = [];
        $kecamatan = [];
        $desa = [];
        $kawasan = [];

        $dataResponse = [];
        foreach ($map as $value) {
            // $provinsi[] = $value->kebakaran_provinsi;
            // $tanggal[] = $value->kebakaran_tanggal;
            // $waktu[] = $value->kebakaran_waktu;
            // $satelit[] = $value->kebakaran_satelit;
            // $latitude[] = $value->kebakaran_latitude;  
            // $longitude[] = $value->kebakaran_longitude;
            // $kabupaten[] = $value->kebakaran_kabupaten;
            // $kecamatan[] = $value->kebakaran_kecamatan;
            // $desa[] = $value->kebakaran_desa;
            // $kawasan[] = $value->kebakaran_kawasan;

            array_push($dataResponse, array(
                'data' => array(
                    'provinsi' => $value->kebakaran_provinsi,
                    'tanggal' => $value->kebakaran_tanggal,
                    'waktu' => $value->kebakaran_waktu,
                    'satelit' => $value->kebakaran_satelit,
                    'latitude' => $value->kebakaran_latitude,
                    'longitude' => $value->kebakaran_longitude,
                    'kabupaten' => $value->kebakaran_kabupaten,
                    'kecamatan' => $value->kebakaran_kecamatan,
                    'desa' => $value->kebakaran_desa,
                    'kawasan' => $value->kebakaran_kawasan
                )
            ));
        }
        // dd($tanggal,$provinsi,$waktu,$satelit,$latitude,$longitude,$kabupaten,$kecamatan,$desa,$kawasan);

        // array_push($dataResponse,array(
        //     'data' => array(                    
        //         'provinsi' => $provinsi,
        //         'tanggal' => $tanggal,
        //         'waktu' => $waktu,
        //         'satelit' => $satelit,
        //         'latitude' => $latitude,
        //         'longitude' => $longitude,
        //         'kabupaten' => $kabupaten,
        //         'kecamaten' => $kecamatan,
        //         'desa' => $desa,
        //         'kawasan' => $kawasan
        //     )
        //     ));
        // return json_encode([
        //     $dataResponse
        // ]);

        $newDataResponse = "name,mass,year,reclat,reclong";
        foreach ($dataResponse as $dataRes) {
            $name =  $dataRes['data']['provinsi'];
            $mass =  5;
            $year =  substr($dataRes['data']['tanggal'], 0, 4);
            $reclat = (float)$dataRes['data']['latitude'];
            $reclong = (float)$dataRes['data']['longitude'];
            $newDataResponse .= "<br/>$name,$mass,$year,$reclat,$reclong";
        }
        // return $newDataResponse;
        // return json_encode([
        //     $dataResponse
        // ]);

        // return json_encode(array(
        //     'status' => 200,
        //     'message' => 'showing data',
        //     'data' => array(                    
        //         'provinsi' => $provinsi,
        //         'tanggal' => $tanggal,
        //         'waktu' => $waktu,
        //         'satelit' => $satelit,
        //         'latitude' => $latitude,
        //         'longitude' => $longitude,
        //         'kabupaten' => $kabupaten,
        //         'kecamaten' => $kecamatan,
        //         'desa' => $desa,
        //         'kawasan' => $kawasan
        //     )
        // )); 
        return view('map.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function jsonGroupDateTime(Request $request)
    {
        $map = DB::table('data_kebakaran')
            ->get();

        $dataResponse = [];
        foreach ($map as $value) {
            array_push($dataResponse, array(
                'data' => array(
                    'provinsi' => $value->kebakaran_provinsi,
                    'tanggal' => $value->kebakaran_tanggal,
                    'waktu' => $value->kebakaran_waktu,
                    'satelit' => $value->kebakaran_satelit,
                    'latitude' => $value->kebakaran_latitude,
                    'longitude' => $value->kebakaran_longitude,
                    'kabupaten' => $value->kebakaran_kabupaten,
                    'kecamatan' => $value->kebakaran_kecamatan,
                    'desa' => $value->kebakaran_desa,
                    'kawasan' => $value->kebakaran_kawasan
                )
            ));
        }

        return response()->streamDownload(function () use ($dataResponse) {
            $csv = fopen("php://output", "w+");

            fputcsv($csv, ["name", "mass", "year", "reclat", "reclong"]);

            foreach ($dataResponse as $dataRes) {
                fputcsv($csv, [
                    $dataRes['data']['provinsi'],
                    210000,
                    (int)rand(1900, 2021),
                    (float)$dataRes['data']['latitude'],
                    (float)$dataRes['data']['longitude'],
                ]);
            }

            fclose($csv);
        }, "response.csv", ["Content-type" => "text/csv"]);
    }

    // public function jsonGroupDateTime(Request $request)
    // {
    //     $dataTanggal = DataKebakaran::distinct()->get('kebakaran_tanggal');
    //     $dataWaktu = DataKebakaran::distinct()->get('kebakaran_waktu');

    //     $dataResponse = [];
    //     foreach($dataTanggal as $date){
    //         $dataTimeByDate = [];
    //         foreach($dataWaktu as $time){
    //             $dataByDatetime = DataKebakaran::where('kebakaran_tanggal',$date->kebakaran_tanggal)
    //                                 ->where('kebakaran_waktu',$time->kebakaran_waktu)
    //                                 ->get();
    //             array_push($dataTimeByDate,array(
    //                 'label'=> $time->kebakaran_waktu,
    //                 'data' => $dataByDatetime
    //             ));
    //         }
    //         array_push($dataResponse,array(
    //             'tahun' => array(
    //                 'label' => $date->kebakaran_tanggal,
    //                 'waktu' => $dataTimeByDate
    //             )
    //         ));

    //     }

    //         $newDataResponse = "name,mass,year,reclat,reclong";
    //         foreach ($dataResponse as $dataRes) {
    //             $name =  $dataRes['tahun']['label'];
    //             $mass =  $dataRes['tahun']['label'];
    //             $year = substr($dataRes['tahun']['label'], 0,4);
    //             $reclat = 34.555; 
    //             // $reclat = $dataTimeByDate['waktu']['label']['data'];
    //             $reclong = 34.555; 
    //             // $reclong = (float)$data['kebakaran_longitude'];
    //             $newDataResponse .= "<br/>$name,$mass,$year,$reclat,$reclong";
    //         }

    //     // return $newDataResponse;


    //     return json_encode([

    //         'data'=> $dataResponse
    //     ]);
    // }
}
