<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pegawai;

class SiswaController extends Controller
{
    public function index()
    {
        // $pegawais=Pegawai::all();
        $siswas=Siswa::simplepaginate(3);
        return view('siswa',compact(['siswas']));
        // return view('siswa');
    }

    public function create(){
        $pegawais=Pegawai::all();
        return view('form_siswa',compact(['pegawais']));
    }

    public function store(Request $request){
        Siswa::create([
            'nama_siswa'=>$request->nama_siswa,
            'tempat_lahir_siswa'=>$request->tempat_lahir_siswa,
            'tanggal_lahir_siswa'=>$request->tanggal_lahir_siswa,
            'alamat_siswa'=>$request->alamat_siswa,
            'nama_orangtua'=>$request->nama_orangtua,
            'no_handphone_orangtua'=>$request->no_handphone_orangtua,
            'kelas'=>$request->kelas,
            'id_pegawai'=>$request->id_pegawai

        ]);
        return redirect('siswa');
    }

    public function edit($id){
        $edit=Siswa::find($id);
        $pegawais=Pegawai::all();
        return view('form_siswa',compact(['edit','pegawais']));
    }

    public function update(Request $request,$id){
        $siswa=Siswa::find($id);

        $siswa->nama_siswa=$request->nama_siswa;
        $siswa->tempat_lahir_siswa=$request->tempat_lahir_siswa;
        $siswa->tanggal_lahir_siswa=$request->tanggal_lahir_siswa;
        $siswa->alamat_siswa=$request->alamat_siswa;
        $siswa->nama_orangtua=$request->nama_orangtua;
        $siswa->no_handphone_orangtua=$request->no_handphone_orangtua;
        $siswa->kelas=$request->kelas;
        $siswa->id_pegawai=$request->id_pegawai;
        $siswa->save();
        
        return redirect('siswa');
    }

    public function delete($id){
        $siswa=Siswa::find($id);

        $siswa->delete();

        return redirect('siswa');
    }
}
