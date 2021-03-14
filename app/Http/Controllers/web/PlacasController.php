<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlacasController extends Controller
{
	public function placa()
	{
		return view('web.placa');
	}
    //
}
