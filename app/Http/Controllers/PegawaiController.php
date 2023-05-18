<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

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
        return view('form_pegawai');
    }

    public function store(Request $request){
        $file = $request->file('foto_profil');
        $gambar = $file->hashName();
        $file->store('photos','public');

        // $image = array();
        // if($files=$request->file('foto_sertifikat')){
        //     foreach($files as $sertif){
        //         $image_name = md5(rand(1000, 10000));
        //         $ext = strtolower($sertif->getClientOriginalExtension());
        //         $image_full_name = $image_name.'.'.$ext;
        //         $upload_path = 'public/docs';
        //         $image_url = $upload_path.$image_full_name;
        //         $sertif->move($upload_path, $image_full_name);
        //         $image[] = $image_url;
        //     }
        // }

        // Pegawai::insert([
        //     'foto_sertifikat' => implode('|',$image)
        // ]);

        $filee = $request->file('foto_sertifikat');
        $sertif = $filee->hashName();
        $filee->store('docs','public');

        Pegawai::create([
            'nama_pegawai'=>$request->nama_pegawai,
            'tempat_lahir_pegawai'=>$request->tempat_lahir_pegawai,
            'tanggal_lahir_pegawai'=>$request->tanggal_lahir_pegawai,
            'alamat_pegawai'=>$request->alamat_pegawai,
            'jabatan'=>$request->jabatan,
            'foto_profil'=>$gambar,
            'foto_sertifikat'=>$sertif
        ]);
        return redirect('pegawai');
    }

    public function edit($id){
        $edit=Pegawai::find($id);
        return view('form_pegawai',compact(['edit']));
    }

    public function update(Request $request,$id){
        $pegawai=Pegawai::find($id);

        $pegawai->nama_pegawai=$request->nama_pegawai;
        $pegawai->tempat_lahir_pegawai=$request->tempat_lahir_pegawai;
        $pegawai->tanggal_lahir_pegawai=$request->tanggal_lahir_pegawai;
        $pegawai->alamat_pegawai=$request->alamat_pegawai;
        $pegawai->jabatan=$request->jabatan;
        $pegawai->save();
        
        return redirect('pegawai');
    }

    public function delete($id){
        $pegawai=Pegawai::find($id);

        $pegawai->delete();

        return redirect('pegawai');
    }
}
