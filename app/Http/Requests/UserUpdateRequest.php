<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UserUpdateRequest extends FormRequest
{

    public function authorize()
	{
		return true;
	}

	public function rules()
	{
        $id = $this->user;
        //On récupère l'id de l'utilisateur dans l'url. Ensuite on utilise une possibilité d'exclusion de la règle "unique => permet de verfier le carractere unique d'une seule des deux valeurs
		return [
			'name' => 'required|max:255|unique:users,name,' . $id,
			'email' => 'required|email|max:255|unique:users,email,' . $id
		];
	}

}