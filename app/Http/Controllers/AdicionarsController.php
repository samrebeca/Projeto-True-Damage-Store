<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdicionarsController extends Controller
{
	public function adicionar()
	{
		return view('adicionar');
	}
}
