@extends('layouts.app')

@section('header')
<div class="container-fluid">
    <h1 class="text-black-50" style="text-align: center">ROLE MANAGEMENT</h1>
</div>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6" style="margin-left: auto; margin-right: auto;">
            <div class="card">

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Name</th>
                                <th>Feature</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role )
                            <tr>
                                <td>1.</td>
                                <td>{{$role->name}}</td>
                                <td>

                                    @foreach ($role->role_feature as $feature)
                                        <span class="badge">
                                            {{$feature->feature->name}}
                                        </span>
                                    @endforeach
                                    
                                </td>
                                <td>
                                    <span class="badge badge-warning">
                                        <a href="/developer/edit/{{$role->id}}" style="color: aliceblue">Edit Role</a>
                                    </span>
    
                                    <span class="badge badge-danger">
                                        <a href="" style="color:aliceblue">Delete Role</a>
                                    </span>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div style="right: 0%">
                        <span class="badge btn-success" style="float: right">
                            <a href="/developer/create" style="color: aliceblue">Create</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection