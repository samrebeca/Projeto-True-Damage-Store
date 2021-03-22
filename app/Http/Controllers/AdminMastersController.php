<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminMastersController extends Controller
{
	public function adminmaster()
	{
		return view('adminmaster');
	}
}
