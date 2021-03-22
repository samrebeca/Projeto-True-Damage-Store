<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditarClientesController extends Controller
{
	public function editarcliente()
	{
		return view('editarcliente');
	}
}
