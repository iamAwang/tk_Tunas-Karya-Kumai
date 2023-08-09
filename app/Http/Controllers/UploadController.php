<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class UploadController extends Controller
{
    public function index()
    {
        // $pesans=Pesan::all();
        $pesans=Pesan::simplepaginate(3);
        return view('pesan',compact(['pesans']));
        // return view('pesan');
    }

    public function create(){
        return view ('Form_Upload_galeri');
    }

    public function create_pesan(Request $request){
        
        Pesan::create ([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'no_handphone'=>$request->no_handphone,
            'pesan'=>$request->pesan,
        ]);
        // return redirect('/')->with('success','Pesan Anda Telah Terkirim');
        // return redirect('/');
        // return back()->with('message','Pesan Anda Telah Terkirim');
        return back()->with('success','Pesan Anda Telah Terkirim');

    }

    // public function view_success(){
    //     return view ('pesanSuccess');
    // }
}
