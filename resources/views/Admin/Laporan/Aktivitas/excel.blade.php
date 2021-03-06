
@extends('Admin.layouts.app')

@section('content')

<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Cetak Log (Excel)</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cetak Log (Excel)</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- select options  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>                                        
            @endif
            @if (session()->has('failed'))
                <div class="alert alert-danger">
                    {{ session()->get('failed') }}
                </div>                                        
            @endif
            <div class="card-body">
                <form action="/excelLogPrint" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="input-select">Tanggal Awal</label>
                                <input type="date" name="awal" class="form-control  @error('awal') is-invalid @enderror" id="awal">
                                @error('awal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="input-select">Tanggal Akhir</label>
                                <input type="date" name="akhir" class="form-control @error('akhir') is-invalid @enderror" id="akhir">
                                @error('akhir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    <div class="col-12">
                        <center><button class="btn btn-primary" type="submit">Cetak Laporan</button></center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

