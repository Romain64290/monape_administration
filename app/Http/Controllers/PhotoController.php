<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use App\Repositories\PhotoRepository;

class PhotoController extends Controller
{
    public function create()
	{
		return view('photo');
	}

	public function store(ImagesRequest $request,PhotoRepository $photorepository)
	{
		
			if($photorepository->save($request->image)) {
				return view('photo_ok');
			
		}

		return redirect('photo')
			->with('error','Désolé mais votre image ne peut pas être envoyée !');
	}
}