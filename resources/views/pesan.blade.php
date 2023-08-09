@extends('layouts.app') @section('header')
<div class="container-fluid">
    <h1 class="text-black-50" style="text-align: center">PESAN MASUK</h1>
</div>
@endsection @section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">UMPAN BALIK UNTUK TK TUNAS KARYA KUMAI</h3>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr style="text-align: center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Handphone</th>
                    <th>Pesan</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=$pesans->FirstItem()
                @endphp
                @foreach ($pesans as $pesan)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$pesan->nama}}</td>
                    <td>{{$pesan->email}}</td>
                    <td>{{$pesan->no_handphone}}</td>
                    <td>{{$pesan->pesan}}</td>
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
        {{$pesans->Links()}}
        </ul>
    </div>
</div>
@endsection
