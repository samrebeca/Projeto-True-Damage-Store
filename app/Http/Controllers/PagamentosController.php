<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagamentosController extends Controller
{
	public function pagamento()
	{
		return view('pagamento');
	}
}
