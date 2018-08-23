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
        $users = User::select(['id', 'lastName', 'email', 'firstName']);

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->addColumn('delete', function ($user) {
                return '<a href="/products/show/1">delete</a>';
            })
            ->addColumn('zone', function ($user) {
                return '<input type="checkbox" onclick="location.href=\'change_zone.php?zone=1&id_membre=5&etat=off\';" checked > Estival  &nbsp; &nbsp; &nbsp;&nbsp; 
                <input type="checkbox" onclick="location.href=\'change_zone.php?zone=2&id_membre=5&etat=off\';" checked> Reste de l\'annéé &nbsp; &nbsp; &nbsp;&nbsp;
                <input type="checkbox"  onclick="location.href=\'change_zone.php?zone=3&id_membre=5&etat=off\';" checked > Entreprise ';
            })
            
            //permet d'afficher un contenu HTML
            ->rawColumns(['delete','action','zone'])

            ->make(true);
    }
}
