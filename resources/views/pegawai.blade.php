@extends('layouts.app') @section('header')
<div class="container-fluid">
    <h1 class="text-black-50" style="text-align: center">DATA PEGAWAI</h1>
</div>
@endsection @section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pegawai TK Tunas Karya Kumai 2023/2024</h3>
    </div>

    <div class="card-body table-responsive p-0" style="height: 300px">
        <table class="table table-bordered">
            <thead>
                <tr style="text-align: center">
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Foto</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=$pegawais->FirstItem()
                @endphp
                @foreach ($pegawais as $pegawai)
                <tr style="text-align: center">
                    <td>{{$no}}</td>
                    <td>{{$pegawai->nama_pegawai}}</td>
                    <td>{{$pegawai->tempat_lahir_pegawai}}</td>
                    <td>{{$pegawai->tanggal_lahir_pegawai}}</td>
                    <td>{{$pegawai->alamat_pegawai}}</td>
                    <td>{{$pegawai->pangkats->nama}}</td>
                    <td>
                        <a href="{{asset('storage/photos')}}/{{$pegawai->foto_profil}}" target="blank">
                            <img height="50%" width="50%" src="{{asset('storage/photos')}}/{{$pegawai->foto_profil}}" >
                        </a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-block btn-warning">
                            <a href="{{route('editPegawai',$pegawai->id)}}" style="text-decoration: none; color:white">
                                <i class="fas fa-pen"></i> Ubah
                            </a>
                        </button>
                    </td>
                    <td><form action="{{route('deletePegawai',@$pegawai->id)}}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus pegawai ini?')">
                        @csrf
                        <button type="submit" class="btn btn-block btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                    </td>   
                    {{-- <td>
                        <button type="button" class="btn btn-block btn-info">
                            <a href="#" style="text-decoration: none; color:white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 32 32"><path fill="currentColor" d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13s13-5.832 13-13S23.168 3 16 3zm0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16S9.913 5 16 5zm-1 5v5h-5v2h5v5h2v-5h5v-2h-5v-5h-2z"/></svg>
                                Tambah</a>
                        </button>
                        <button type="button" class="btn btn-block btn-success">
                            <a href="#" style="text-decoration: none; color:white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256"><path fill="currentColor" d="M247.31 124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57 61.26 162.88 48 128 48S61.43 61.26 36.34 86.35C17.51 105.18 9 124 8.69 124.76a8 8 0 0 0 0 6.5c.35.79 8.82 19.57 27.65 38.4C61.43 194.74 93.12 208 128 208s66.57-13.26 91.66-38.34c18.83-18.83 27.3-37.61 27.65-38.4a8 8 0 0 0 0-6.5ZM128 192c-30.78 0-57.67-11.19-79.93-33.25A133.47 133.47 0 0 1 25 128a133.33 133.33 0 0 1 23.07-30.75C70.33 75.19 97.22 64 128 64s57.67 11.19 79.93 33.25A133.46 133.46 0 0 1 231.05 128c-7.21 13.46-38.62 64-103.05 64Zm0-112a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Z"/></svg>
                                Lihat</a>
                        </button>
                    </td> --}}
                    
                    {{-- <td>
                        @php
                            $image = DB::table('pegawais')->where('id',1)->first();
                            $images = explode('|','$image'->foto_sertifikat);
                        @endphp
                        @foreach ($images as $item)
                            <img src="{{URL::to($item)}}" style="height:100px; width:150px" alt="">
                            <br>
                        @endforeach
                    </td> --}}
                    
                    {{-- <td>
                        <a href="{{asset('storage/docs')}}/{{$pegawai->foto_sertifikat}}" target="blank">
                            <img height="50%" width="50%" src="{{asset('storage/docs')}}/{{$pegawai->foto_sertifikat}}" >
                        </a>
                    </td> --}}
                    
                    
                    {{-- <td><form action="{{route('deletePegawai',@$pegawai->id)}}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus pegawai ini?')">
                        @csrf
                        <button type="submit" class="btn btn-block btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                    </td> --}}
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
