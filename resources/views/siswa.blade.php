@extends('layouts.app') @section('header')
<div class="container-fluid">
    <h1 class="text-black-50" style="text-align: center">DATA SISWA</h1>
</div>
@endsection @section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Siswa TK Tunas Karya Kumai 2023/2024</h3>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr style="text-align: center">
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Nama Orang Tua</th>
                    <th>No Handphone Orang Tua</th>
                    <th>Kelas</th>
                    <th>Wali Kelas</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=$siswas->FirstItem()
                @endphp
                @foreach ($siswas as $siswa)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$siswa->nama_siswa}}</td>
                    <td>{{$siswa->tempat_lahir_siswa}}</td>
                    <td>{{$siswa->tanggal_lahir_siswa}}</td>
                    <td>{{$siswa->alamat_siswa}}</td>
                    <td>{{$siswa->nama_orangtua}}</td>
                    <td>{{$siswa->no_handphone_orangtua}}</td>
                    <td>{{$siswa->kelas}}</td>
                    <td>{{$siswa->pegawais->nama_pegawai}}</td>
                    <td>
                        <button type="button" class="btn btn-block btn-warning">
                            <a href="{{route('editSiswa',$siswa->id)}}" style="text-decoration: none; color:white">
                                <i class="fas fa-pen"></i> Ubah
                            </a>
                        </button>
                    </td>
                    <td><form action="{{route('deleteSiswa',@$siswa->id)}}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus siswa ini?')">
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
        {{$siswas->Links()}}
        </ul>
    </div>
</div>
<a class="btn btn-primary" href="{{route('createSiswa')}}" style="margin-bottom: 25px">
    <i class="fas fa-user-plus"></i> Tambah Siswa
</a>
@endsection
