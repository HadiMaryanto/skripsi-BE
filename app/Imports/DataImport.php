<?php

namespace App\Imports;

use App\Models\DataKebakaran;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataKebakaran([
        'kebakaran_latitude' => $row['kebakaran_latitude'],
        'kebakaran_longitude' => $row['kebakaran_longitude'],
        'kebakaran_satelit' => $row['kebakaran_satelit'],
        'kebakaran_waktu' => $row['kebakaran_waktu'],
        'kebakaran_tanggal' => $row['kebakaran_tanggal'],
        'kebakaran_source' => $row['kebakaran_source'],
        'kebakaran_provinsi' => $row['kebakaran_provinsi'],
        'kebakaran_kabupaten' => $row['kebakaran_kabupaten'],
        'kebakaran_kecamatan' => $row['kebakaran_kecamatan'],
        'kebakaran_desa' => $row['kebakaran_desa'],
        'kebakaran_kawasan' => $row['kebakaran_kawasan'],
        ]);
    }
}
