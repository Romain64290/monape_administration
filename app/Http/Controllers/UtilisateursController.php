<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Redirect;
use DataTables;
use App\Models\User;

class UtilisateursController extends Controller
{
    public function datatable()
    {
        return view('administration.utilisateurs');
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
                return '<a href="#edit-'.$user->id.'" title="Accepter" class="btn btn-xs btn-primary"><i class="fas fa-check"></i></a>&nbsp;&nbsp;&nbsp;<a href="#edit-'.$user->id.'" title="Supprimer" class="btn btn-xs btn-danger"><i class="far fa-trash-alt"></i></a>';
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
