<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class AdministrationController extends Controller
{
	
    public function show()
	{
		$users = User::all();
		// compact() permet de créer un tableau automatiquement en prenant les noms des variables donné en paramètre.	
		return view('administration.show', compact('users'));
	}
}
