<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class AdministrateursController extends Controller
{
	
    public function index()
	{
		$users = User::all();
		// compact() permet de créer un tableau automatiquement en prenant les noms des variables donné en paramètre.	
		return view('administrateurs.index', compact('users'));
	}
}
