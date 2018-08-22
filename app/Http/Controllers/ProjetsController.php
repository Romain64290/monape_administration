<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetsController extends Controller
{
    public function index()
	{
		return view('projets.index');
	}
}
