@extends('layouts.app') @section('header')
<div class="container-fluid">
    <h1 class="text-black-50" style="text-align: center">DATA PEGAWAI</h1>
</div>
@endsection @section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pegawai TK Tunas Karya Kumai 2023/2024</h3>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr style="text-align: center">
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=$pegawais->FirstItem()
                @endphp
                @foreach ($pegawais as $pegawai)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$pegawai->nama_pegawai}}</td>
                    <td>{{$pegawai->tempat_lahir_pegawai}}</td>
                    <td>{{$pegawai->tanggal_lahir_pegawai}}</td>
                    <td>{{$pegawai->alamat_pegawai}}</td>
                    <td>{{$pegawai->jabatan}}</td>
                    <td>
                        <button type="button" class="btn btn-block btn-warning">
                            <a href="{{route('editPegawai',$pegawai->id)}}" style="text-decoration: none; color:white">
                                <i class="fas fa-pen"></i> Ubah
                            </a>
                        </button>
                    </td>
                    <td><form action="{{route('deletePegawai',@$pegawai->id)}}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus pegawai ini?')">
                        @csrf
                        <button type="submit" class="btn btn-block btn-danger"><i class="fas fa-trash"></i> Hapus</button></td>
                </tr>
                @php
                    $no++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix" style="background-color: white">
        <ul class="pagination pagination-sm m-0 float-right">
        {{$pegawais->Links()}}
        </ul>
    </div>
</div>
<a class="btn btn-primary" href="{{route('createPegawai')}}" style="margin-bottom: 25px">
    <i class="fas fa-user-plus"></i> Tambah Pegawai
</a>
@endsection
