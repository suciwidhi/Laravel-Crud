<?php

namespace App;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class Pembinaan extends Model
{
    protected $table = 'pembinaan';
    protected $fillable = ['id', 'Nama_daerah', 'Tanggal', 'Kegiatan', 'Gambar', 'updated_at', 'created_at'];
}
