<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikat;
use App\Models\Pegawai;

class SertifikatController extends Controller
{
    public function create(){
        return view('form_sertifikat');
    }

    public function store(Request $request){
        $filee = $request->file('foto_sertifikat');
        $sertif = $filee->hashName();
        $filee->store('docs','public');

        Pegawai::update([
            'foto_sertifikat'=>$sertif
        ]);
        return redirect('pegawai');
    }
}
