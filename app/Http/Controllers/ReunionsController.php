<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReunionsController extends Controller
{
    public function index()
	{
		return view('reunions.index');
	}
}
