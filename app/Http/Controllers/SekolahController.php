<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Role;
use App\Models\Sekolah;

class SekolahController extends Controller
{
    public function index(){
        return view('sekolah');
    }

    public function view(){
        $pegawais = Pegawai::all();
        // $sekolahs = Sekolah::all();
        // $roles = Role::all();
        return view ('welcome',compact(['pegawais']));
    }

    
}
