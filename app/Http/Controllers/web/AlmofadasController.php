<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlmofadasController extends Controller
{
	public function almofada()
	{
		return view('web.almofada');
	}
    //
}
