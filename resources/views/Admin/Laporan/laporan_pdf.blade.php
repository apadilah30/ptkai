@php
	$count = $data->count();
	$smax = $data->max('suhu');
	$smin = $data->min('suhu');
	$savg = $data->avg('suhu');

	$kmax = $data->max('kelembapan');
	$kmin = $data->min('kelembapan');
	$kavg = $data->avg('kelembapan');

	$tmax = $data->max('tekanan');
	$tmin = $data->min('tekanan'); 
	$tavg = $data->avg('tekanan');

	$date = date("d M Y");

@endphp

<!DOCTYPE html>
<html>
<head>
	<title>Laporan Monitoring</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<style>
		*{
			font-family:sans-serif;
		}
	</style>
</head>
<body>
	<div class="container">
	<style type="text/css">
		table tr td{
			text-align: center;
		},
		table tr th{
			text-align: center;
		}
	</style>
	<div class="row" style="margin-bottom: 50px;">
		<div class="col-4 border-right">
			<img src="{{$set->icon}}" style="float: left;" width="100%" alt="placeholder+image">
		</div>
		<div class="col-8" >
			<h3 style="text-align: center; margin-top: 50px;">
				{{$set->header_img}}
			</h3> 
		</div>
	</div>
	<center>
		<h3>Data Monitoring</h3><br>
		<h6>Dari {{$awal}} s.d. {{$akhir}}</h6>
	</center>
	

	<div class="row">
		<table class='table table-bordered' width="100%" style="border:1;">
			<thead>
				<tr>
					<th>No</th>
					<th>Waktu</th>
					<th>Suhu</th>
					<th>Kelembapan</th>
					<th>Tekanan</th>
					<th>Alarm</th>
					<th>Nama Ruangan</th>
					<th>No Seri Perngkat</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($data as $p)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$p->time}}</td>
					<td>{{$p->suhu}}</td>
					<td>{{$p->kelembapan}}</td>
					<td>{{$p->tekanan}}</td>
					<td>{{$p->alarm}}</td>
					<td>{{$p->ruangan->nama}}</td>
					<td>{{$p->perangkat->no_seri}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="row">
		<table class="table table-bordered" width="100%" style="border-style:solid;">
			<thead>
				<tr>
					<th>Jumlah Baris</th>
					<th>Suhu Tertinggi</th>
					<th>Suhu Terendah</th>
					<th>Suhu Rata Rata</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$count}}</td>
					<td>{{$smin}}</td>
					<td>{{$smax}}</td>
					<td>{{$savg}}</td>
				</tr>
			</tbody>
		</table>
		<table width="100%" style="border-style:solid;">
			<thead>
				<th>Kelembapan Tertinggi</th>
				<th>Kelembapan Terendah</th>
				<th>Kelembapan Rata Rata</th>
			</thead>
			<tbody>
				<td>{{$kmin}}</td>
				<td>{{$kmax}}</td>
				<td>{{$kavg}}</td>
			</tbody>
		</table>
		<table width="100%" style="border-style:solid;">
			<thead>
				<th>Tekanan Tertinggi</th>
				<th>Tekanan Terendah</th>
				<th>Tekanan Rata Rata</th>
			</thead>
			<tbody>
				<td>{{$tmin}}</td>
				<td>{{$tmax}}</td>
				<td>{{$tavg}}</td>
			</tbody>
		</table>
	</div>
	
	<div class="row" style="margin-bottom: 50px;">
		<div class="col-8">
			
		</div>
		<div class="col-4">
			{{$set->footer}},  {{$date}}<br>
			{{Auth::user()->name}}
		</div>
	</div>
		
	</div>
</body>
</html>