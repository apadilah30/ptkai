<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setapp;

class SetappController extends Controller
{
    public function index()
    {
    	$data = Setapp::all();
    	return view('Admin.Setapp.index');
    }

    public function store(Request $req)
    {
    	# code...
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
