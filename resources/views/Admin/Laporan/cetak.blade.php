@php
    $apps = \App\Aktivasi::all();
@endphp
@extends('Admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Cetak Laporan</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cetak Laporan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="ecommerce-widget">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                    <div class="section-block">
                    </div>
                    <div class="tab-regular">
                        <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab-justify" data-toggle="tab" href="#home-justify" role="tab" aria-controls="home" aria-selected="true">Cetak Laporan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#profile-justify" role="tab" aria-controls="profile" aria-selected="false">Preview Chart</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent7" bg-dark>
                            <div class="tab-pane fade show active" id="home-justify" role="tabpanel" aria-labelledby="home-tab-justify">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
                                        <form action="/downloadLaporan" method="post" id="formqq">
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
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Ruangan</label>
                                                        <select name="ruang" id="ruangan" class="form-control">
                                                            <option value="all">Semua ruangan</option>
                                                            @foreach($ruang as $f)
                                                                <option value="{{ $f->id }}">{{ $f->nama }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('status')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Parameter</label>
                                                        <select name="satuan" id="parameter" class="form-control">
                                                            <option value="allper">Semua parameter</option>

                                                            <option value="suhu">Suhu</option>}
                                                            <option value="kelembapan">Kelembapan</option>}
                                                            <option value="tekanan">Tekanan</option>}
                                                            option
                                                        </select>
                                                        @error('status')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkPdf">
                                                        <label class="form-check-label" for="checkPdf">
                                                            PDF
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkExcel">
                                                        <label class="form-check-label" for="checkExcel">
                                                            Excel
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                <button class="btn btn-primary" type="submit" name="btpdf">Cetak Laporan</button>
                                                </div>
                                                    {{-- <div class="col-6">
                                                    <div class="btn btn-primary" style="text-align: right;" id="myBtn">Show Chart</div>
                                                    <span>*) Hanya menampilkan 10 data terakhir</span>
                                                </div> --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-justify" role="tabpanel" aria-labelledby="profile-tab-justify">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                @foreach($ruang as $r)
                                                    <div id="chart{{$r->id}}"></div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  window.Promise ||
    document.write(
      '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
    )
  window.Promise ||
    document.write(
      '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
    )
  window.Promise ||
    document.write(
      '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
    )
</script>


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script src="/assets/vendor/sweetalert/sweetalert.min.js"></script>

<script>

    const formExcel = ()=>{
        const pdf = document.querySelector("#checkPdf");
        const excel = document.querySelector("#checkExcel");
        const actionForm = document.querySelector("#formqq");

        pdf.checked = true;

        pdf.addEventListener('click', e=>{
            if(excel.checked == true){
                excel.checked = false;
            }
            actionForm.action = "http://localhost:8000/downloadLaporan";
        });
        excel.addEventListener('click', e=>{
            if(pdf.checked == true){
                pdf.checked = false;
            }
            actionForm.action = "{{ route('download.excel') }}";
        });
    }

    formExcel();



    var suhu = []
    var kelembapan = []
    var tekanan = []

    let ruangan = @json($ruang);
        console.log(ruangan);
    
    ruangan.forEach(r=> {

    var options = {

        series: [
            {
                data: suhu,
                name: "Suhu"
            },
            {
                data: tekanan,
                name: "Tekanan"
            },
            {
                data: kelembapan,
                name: "Kelembapan"
            }
        ],
          chart: {
          id: 'realtime',
          height: 350,
          type: 'line',
          animations: {
            enabled: true,
            easing: 'linear',
            dynamicAnimation: {
              speed: 1000
            }
          },
          toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: true
        },
        stroke: {
          curve: 'smooth'
        },
        title: {
          text: 'Monitoring '+r.nama,
          align: 'left'
        },
        markers: {
          size: 0
        },
        xaxis: {
        },
        yaxis: {
          max: 100
        },
        legend: {
          show: true
        },
    };
    
        var chart = new ApexCharts(document.querySelector("#chart"+r.id), options);
        render();
        chart.render();
        function render() {
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
            url:'api/getData',
            method:'GET',
            data:{
                ruangan:r.id,
            },
            dataType:'JSON',
            success:function(data){
                suhu = [];
                kelembapan = [];
                tekanan = [];
                let dates = 0
                let formatted_date = "";
                let newMonitor = data.sort((a,b)=>{
                return a.time.localeCompare(b.time);
                });
                let monitor = newMonitor
                monitor.forEach(element => {
                    // dates = new Date(element.date+' '+element.time)
                    suhu.push({
                    x: element.time,
                    y: element.suhu
                    })
                    tekanan.push({
                    x: element.time,
                    y: element.tekanan
                    })
                    kelembapan.push({
                    x: element.time,
                    y: element.kelembapan
                    })

                });
                chart.updateSeries([
                {
                    data: suhu
                },
                {
                    data: tekanan
                },
                {
                    data: kelembapan
                }
            ])
            },
            error : function(e) {
                console.log(e)
            }
            });
        } 
    });

</script>
@endsection

