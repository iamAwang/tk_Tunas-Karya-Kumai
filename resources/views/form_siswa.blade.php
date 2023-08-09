@extends('layouts.app') @section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Siswa</h3>
    </div>

    <form action="<?php @$edit!=null? printf(route('updateSiswa',[$edit->id])) : printf(route('storeSiswa'))?>" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Siswa</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Nama Siswa"
                    name="nama_siswa"
                    value="<?php if(@$edit!=null) printf($edit->nama_siswa)?>"
                />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tempat Lahir</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Tempat Lahir"
                    name="tempat_lahir_siswa"
                    value="<?php if(@$edit!=null) printf($edit->tempat_lahir_siswa)?>"
                />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tanggal Lahir</label>
                <input
                    type="date"
                    class="form-control"
                    placeholder="Tanggal Lahir"
                    name="tanggal_lahir_siswa"
                    value="<?php if(@$edit!=null) printf($edit->tanggal_lahir_siswa)?>"
                    onfocus="this.showPicker()"
                />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Alamat Siswa</label>
                <input
                    type="address"
                    class="form-control"
                    placeholder="Alamat Siswa"
                    name="alamat_siswa"
                    value="<?php if(@$edit!=null) printf($edit->alamat_siswa)?>"
                />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Orang Tua</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Nama Orang Tua"
                    name="nama_orangtua"
                    value="<?php if(@$edit!=null) printf($edit->nama_orangtua)?>"
                />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">No Handphone Orang Tua</label>
                <input
                    type="number"
                    class="form-control"
                    placeholder="No Handphone Orang Tua"
                    name="no_handphone_orangtua"
                    value="<?php if(@$edit!=null) printf($edit->no_handphone_orangtua)?>"
                />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Kelas</label>
                <select class="form-control" name="kelas">
                    <option value="A">A</option>
                    <option value="B">B</option>
                </select>
            </div>

            {{-- <div class="form-group">
                <label for="exampleInputPassword1">Kelas</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Kelas"
                    name="kelas"
                    value="<?php if(@$edit!=null) printf($edit->kelas)?>"
                />
            </div> --}}

            {{-- <div class="form-group">
                <label for="exampleInputPassword1">Wali Kelas</label>
                <select class="form-control" name="id_pegawai" value="<?php if(@$edit!=null) printf($edit->id_pegawai)?>">
                   
                    @foreach ($id_pegawais as $id_pegawai)
                        @if (@$edit->id_pegawai->id == $id_pegawai->id)
                    <option value="{{$id_pegawai->id}}" selected>{{$id_pegawai->nama_pegawai}}</option>
                        @else
                    <option value="{{$id_pegawai->id}}">{{$id_pegawai->nama_pegawai}}</option>
                        @endif
                    @endforeach
                </select>
            </div> --}}
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" style="float: right">Tambahkan</button>
            <button type="submit" class="btn btn-primary" style="float: left"><a href="{{route('indexSiswa')}}" style="text-decoration: none; color: white">Kembali</a></button>
        </div>
    </form>
</div>
@endsection
