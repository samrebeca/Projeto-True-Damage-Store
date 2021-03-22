<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisuClientesController extends Controller
{
	public function visucliente()
	{
		return view('visucliente');
	}
}
