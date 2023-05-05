<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table='pegawais';
    protected $fillable=['nama_pegawai','tempat_lahir_pegawai','tanggal_lahir_pegawai','alamat_pegawai','jabatan'];
}
