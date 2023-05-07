@extends('layouts.app') 
@section('content') 
<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">Tambah Sertifikat</h3>
    </div>
    <form action="{{route('storeSertifikat')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Upload Sertifikat</label>
                <input type="file" name="foto_sertifikat" class="form-control" multiple>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success" style="float: right">Tambahkan</button>
            <button type="submit" class="btn btn-success" style="float: left"><a href="{{route('indexPegawai')}}" style="text-decoration: none; color: white">Kembali</a></button>
        </div>
    </form>
</div>
@endsection