@extends('layouts.app') @section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Pegawai</h3>
    </div>

    <form action="<?php @$edit!=null? printf(route('updatePegawai',[$edit->id])) : printf(route('storePegawai'))?>" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pegawai</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Nama Pegawai"
                    name="nama_pegawai"
                    value="<?php if(@$edit!=null) printf($edit->nama_pegawai)?>"
                />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tempat Lahir</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Tempat Lahir"
                    name="tempat_lahir_pegawai"
                    value="<?php if(@$edit!=null) printf($edit->tempat_lahir_pegawai)?>"
                />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tanggal Lahir</label>
                <input
                    type="date"
                    class="form-control"
                    placeholder="Tanggal Lahir"
                    name="tanggal_lahir_pegawai"
                    value="<?php if(@$edit!=null) printf($edit->tanggal_lahir_pegawai)?>"
                    onfocus="this.ShowPicker()"
                />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Alamat Pegawai</label>
                <input
                    type="address"
                    class="form-control"
                    placeholder="Alamat Pegawai"
                    name="alamat_pegawai"
                    value="<?php if(@$edit!=null) printf($edit->alamat_pegawai)?>"
                />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Jabatan</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Jabatan Pegawai"
                    name="jabatan"
                    value="<?php if(@$edit!=null) printf($edit->jabatan)?>"
                />
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" style="float: right">Tambahkan</button>
            <button type="submit" class="btn btn-primary" style="float: left"><a href="{{route('indexPegawai')}}" style="text-decoration: none; color: white">Kembali</a></button>
        </div>
    </form>
</div>
@endsection
