<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKebakaran extends Model
{
    protected $table = 'data_kebakaran';
    protected $primaryKey = 'kebakaran_id';

    protected $fillable = [
        'kebakaran_latitude',
        'kebakaran_longitude',
        'kebakaran_satelit',
        'kebakaran_waktu',
        'kebakaran_tanggal',
        'kebakaran_source',
        'kebakaran_provinsi',
        'kebakaran_kabupaten',
        'kebakaran_kecamatan',
        'kebakaran_desa',
        'kebakaran_kawasan',
    ];

    public $timestamps = false;
}
