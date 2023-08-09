@extends('layouts.app') @section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Pegawai</h3>
    </div>

    <form action="<?php @$edit!=null? printf(route('updatePegawai',[$edit->id])) : printf(route('storePegawai'))?>" method="POST" enctype="multipart/form-data">
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
                    onfocus="this.showPicker()"
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
                <select class="form-control" name="id_jabatan" value="">
                    @foreach ($id_jabatans as $id_jabatan)
                        @if (@$edit->id_jabatan == $id_jabatan->id)
                            <option value="{{$id_jabatan->id}}" selected>{{$id_jabatan->nama}}</option>
                        @else 
                            <option value="{{$id_jabatan->id}}">{{$id_jabatan->nama}}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Upload Foto</label>
                <input type="file" name="foto_profil" class="form-control" value=""><?php if(@$edit!=null) printf($edit->foto_profil)?>
            </div>

            {{-- <div class="form-group">
                <label>Upload Sertifikat</label>
                <input type="file" name="foto_sertifikat" class="form-control" multiple><?php if(@$edit!=null) printf($edit->foto_sertifikat)?>
            </div> --}}
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" style="float: right">Tambahkan</button>
            <button type="submit" class="btn btn-primary" style="float: left"><a href="{{route('indexPegawai')}}" style="text-decoration: none; color: white">Kembali</a></button>
        </div>
    </form>
</div>
@endsection
