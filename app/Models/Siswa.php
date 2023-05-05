<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table='siswas';
    protected $fillable=['nama_siswa','tempat_lahir_siswa','tanggal_lahir_siswa','alamat_siswa','nama_orangtua','no_handphone_orangtua','kelas','id_pegawai'];

    public function pegawai(){
        return $this->belongsTo(Pegawai::class);
    }
}
