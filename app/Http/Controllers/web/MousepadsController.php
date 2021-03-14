<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MousepadsController extends Controller
{
	public function mousepad()
	{
		return view('web.mousepad');
	}
    //
}
