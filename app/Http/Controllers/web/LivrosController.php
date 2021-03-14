<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
	public function livro()
	{
		return view('web.livro');
	}
    //
}
