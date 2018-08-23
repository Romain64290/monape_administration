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
        $users = User::all();

        
       /* $users = User::where('active', 1)
               ->orderBy('name', 'desc')
               ->take(10)
               ->get();*/

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-edit"></i> Accepter </a>&nbsp;&nbsp;&nbsp;<a href="#edit-'.$user->id.'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> Supprimer </a>';
            })
            ->addColumn('statut', function ($user) {
                return 'En attente';
            })
            ->addColumn('zone', function ($user) {
                return '<input type="checkbox" onclick="location.href=\'change_zone.php?zone=1&id_membre=5&etat=off\';" checked > Site web &nbsp; &nbsp; &nbsp;&nbsp; 
                <input type="checkbox" onclick="location.href=\'change_zone.php?zone=2&id_membre=5&etat=off\';" checked> Comptabilité';
            })
            
            //permet d'afficher un contenu HTML
            ->rawColumns(['statut','action','zone'])

            ->make(true);
    }
}
