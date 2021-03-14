<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BonecosController extends Controller
{
	public function boneco()
	{
		return view('web.boneco');
	}
    //
}
