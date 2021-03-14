<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CanecasController extends Controller
{
	public function caneca()
	{
		return view('web.caneca');
	}
    //
}
