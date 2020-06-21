<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitoring;

class MonitoringController extends Controller
{
    public function index()
    {
        $data = Monitoring::orderBy('created_at','desc')->get();
        return view('Admin.Monitoring.raw',['data'=>$data]);
    }
    public function room()
    {
        return view('Admin.Dashboard.monitoring');
    }

    public function store(Request $req)
    {
    	# code...
    	$data = new Monitoring;

    	$data->date = $req->date;
    	$data->time = $req->time;
    	$data->suhu = $req->suhu;
    	$data->tekanan = $req->tekanan;
    	$data->kelembapan = $req->kelembapan;
    	$data->alarm = $req->alarm;
    	$data->perangkat_id = $req->perangkat_id;
    	$data->ruangan_id = $req->ruangan_id;
    	$data->save();
    }

    public function edit($id)
    {
    	# code...
    }

    public function update(Request $req, $id)
    {
    	# code...
    }

    public function delete($id)
    {
    	# code...
    }
}
