<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginsController extends Controller
{
	public function login()
	{
		return view('login');
	}
}
