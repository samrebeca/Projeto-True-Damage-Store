<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddProdutosController extends Controller
{
	public function addproduto()
	{
		return view('addproduto');
	}
}
