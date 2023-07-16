<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class UploadController extends Controller
{
    public function create(){
        return view ('Form_Upload_galeri');
    }

    public function create_pesan(Request $request){
        
        Pesan::create ([
            'name'=>$request->nama,
            'email'=>$request->email,
            'phone'=>$request->nomorHp,
            'pesan'=>$request->message,
            'id_sekolah'=> 1
        ]);
        // return redirect()->route('Success');
        return back();
    }

    public function view_success(){
        return view ('pesanSuccess');
    }
}
