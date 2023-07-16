<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'pesan',
        'id_sekolah'
    ];
    
    protected $table = 'pesans';
}
