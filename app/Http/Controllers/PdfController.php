<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use File;
use Response;

class PdfController extends Controller
{
    //
    public function index_aboutUs(){
        return response()->file(public_path('photo/aboutUs.pdf'),['content-type'=>'application/pdf']);
    }

    public function index_premium(){
        return response()->file(public_path('photo/premium.pdf'),['content-type'=>'application/pdf']);
    }
}
