<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Redirect;
use DataTables;
use App\Models\User;

class DatatableController extends Controller
{
    public function datatable()
    {
        return view('datatable');
    }

    public function getPosts()
    {
        return \DataTables::of(User::query())->make(true);
    }
}
