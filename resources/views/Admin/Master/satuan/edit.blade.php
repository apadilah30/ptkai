@extends('Admin.layouts.app')
@section('content')
<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Data Satuan</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Data Satuan</li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">                            
                <div class="card-body">
                    <a href="{{ route('satuan.index') }}" class="btn btn-primary">Back</a>
                     @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>                                        
                    @endif
                    <form action="{{ route('satuan.update', $satuan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Parameter</label>
                            <input type="text" class="form-control @error('parameter') is-invalid @enderror" value="{{ $satuan->parameter }}" required  name="parameter">

                            @error('parameter')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Satuan</label>
                            <input type="text" class="form-control  @error('satuan') is-invalid @enderror" name="satuan" value="{{ $satuan->satuan }}">

                             @error('satuan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                                    
                        <div class="form-group">                                        
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>                               
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic table  -->
        <!-- ============================================================== -->
    </div>
</div>
@endsection