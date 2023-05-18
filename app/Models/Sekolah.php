<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;

class Sekolah extends Model
{
    protected $table = 'sekolahs';
    // protected $fillable = [

    // ]
    public function Pegawai(){
        return $this->hashOne(Pegawai::class,'id_sekolah');
    }
}
