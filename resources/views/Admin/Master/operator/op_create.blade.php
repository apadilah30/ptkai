@extends('Admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-block" id="basicform">
                <h3 class="section-title">Tambah Data Operator</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="/operator" class="btn btn-primary col-2">Back</a>
                    <form action="{{ route('tambah.op') }}" method="post" enctype="multipart/form-data">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>                                        
                    @endif
                        @csrf
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Nama Operator</label>
                            <input id="inputText3" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Operator" name="name" value="{{ old('nama') }}" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email address</label>
                            <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Password *password default : 123456 </label>
                                <input id="inputText3" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" value="123456" readonly>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">NIK</label>
                            <input id="inputText3" type="text" class="form-control @error('nik') is-invalid @enderror" placeholder="NIK" name="nik" value="{{ old('nik') }}" required>
                            @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Instansi</label>
                            <input id="inputText3" type="text" class="form-control @error('instansi') is-invalid @enderror" placeholder="Instansi" name="instansi" value="{{ old('instansi') }}" required>
                            @error('instansi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">No Handphone</label>
                            <input id="inputText3" type="text" class="form-control @error('hp') is-invalid @enderror" placeholder="Number Handphone" name="hp" value="{{ old('hp') }}" required>
                            @error('hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="customFile">Foto</label>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" id="customFile" name="foto" required>
                            @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection