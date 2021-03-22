<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditarProdutosController extends Controller
{
	public function editarproduto()
	{
		return view('editarproduto');
	}
}
