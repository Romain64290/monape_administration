<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitewebController extends Controller
{
    public function index()
	{
		return view('siteweb.index');
	}
}
