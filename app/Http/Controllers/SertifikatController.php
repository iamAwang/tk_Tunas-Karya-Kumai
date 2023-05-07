<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        Pegawai::create([
            'foto_sertifikat'=>$sertif
        ]);
        dd($request);
        return redirect('pegawai');
    }
}
