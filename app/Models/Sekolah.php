<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;

class Sekolah extends Model
{
    protected $table = 'sekolahs';
    protected $fillable = [
        'id_sekolah',

    ];
    public function pegawais(){
        return $this->hasMany(Pegawai::class,'id','id_sekolah');
    }
}
