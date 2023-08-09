<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Jabatan;

class PegawaiController extends Controller
{
    public function index()
    {
        // $pegawais=Pegawai::all();
        $pegawais = Pegawai::simplepaginate(5);
        return view('pegawai',compact(['pegawais']));
        // return view('pegawai');
    }

    public function create(){
        $id_jabatans = Jabatan::all();
        return view('form_pegawai',compact(['id_jabatans']));
    }

    public function store(Request $request){
        $file = $request->file('foto_profil');
        $gambar = $file->hashName();
        $file->store('photos','public');

        // $filee = $request->file('foto_sertifikat');
        // $sertif = $filee->hashName();
        // $filee->store('docs','public');
        // dd($request);
        Pegawai::create([
            'nama_pegawai'=>$request->nama_pegawai,
            'tempat_lahir_pegawai'=>$request->tempat_lahir_pegawai,
            'tanggal_lahir_pegawai'=>$request->tanggal_lahir_pegawai,
            'alamat_pegawai'=>$request->alamat_pegawai,
            'id_jabatan'=>$request->id_jabatan,
            'foto_profil'=>$gambar
            // 'foto_sertifikat'=>$sertif
        ]);
        return redirect('pegawai');
    }

    public function edit($id){
        $edit=Pegawai::find($id);
        $id_jabatans = Jabatan::all();
        return view('form_pegawai',compact(['edit','id_jabatans']));
    }

    public function update(Request $request,$id){
        $notHaveFile = true;

        $file = $request->file('foto_profil');
        if($request->file('foto_profil')!=null){
            $notHaveFile = false;
            
            $gambar = $file->hashName();
            $file->store('photos','public');
        }

        // $filee = $request->file('foto_sertifikat');
        // if($request->file('foto_sertifikat')!=null){
        //     $notHaveFile = false;

        //     $sertif = $filee->hashName();
        //     $filee->store('docs','public');
        // }

        $pegawai=Pegawai::find($id);

        $pegawai->nama_pegawai=$request->nama_pegawai;
        $pegawai->tempat_lahir_pegawai=$request->tempat_lahir_pegawai;
        $pegawai->tanggal_lahir_pegawai=$request->tanggal_lahir_pegawai;
        $pegawai->alamat_pegawai=$request->alamat_pegawai;
        $pegawai->id_jabatan =$request->id_jabatan;

        if(!$notHaveFile){
            $pegawai->foto_profil = $gambar;
            // $pegawai->foto_sertifikat = $sertif;
        }

        // if(!$notHaveFile){
        //     $pegawai->foto_sertifikat = $sertif;
        // }

        $pegawai->save();
        
        return redirect('pegawai');
    }

    public function delete($id){
        $pegawai=Pegawai::find($id);

        $pegawai->delete();

        return redirect('pegawai');
    }
}
