<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CamisetasController extends Controller
{
	public function camiseta()
	{
		return view('web.camiseta');
	}
    //
}
