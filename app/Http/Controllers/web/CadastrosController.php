<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadastrosController extends Controller
{
	public function cadastro()
	{
		return view('cadastro');
	}
}
