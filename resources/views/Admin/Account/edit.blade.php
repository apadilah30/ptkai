@extends('Admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-block" id="basicform">
                <h3 class="section-title">My Profile</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/updateProfile/{{$data->id}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('foto/'.$data->id)}}" alt="placeholder+image" name="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Foto
                        </div>
                        <div class="col-4">
                            <input type="file" class="form-control" value="{{$data->foto}}" name="foto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Nama
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" value="{{$data->name}}" placeholder="{{$data->name}}" name="name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            NIK
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" value="{{$data->nik}}" placeholder="{{$data->nik}}" name="nik">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            No HP
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" value="{{$data->no_hp}}" placeholder="{{$data->no_hp}}" name="no_hp">
                        </div>
                    </div>
                    <input type="hidden" value="{{$data->level}}"  name="level">
                    <div class="row">
                        <div class="col-3">
                            Email
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" value="{{$data->email}}" placeholder="{{$data->email}}" name="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Password
                        </div>
                        <div class="col-4">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Password Confirmation
                        </div>
                        <div class="col-4">
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <a href="/dashboard" class="btn btn-primary" >Back</a>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary" ><i class="fa fa-edit"></i>Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection