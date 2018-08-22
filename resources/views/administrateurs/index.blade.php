@extends('layouts.app')

<!-- ajout de css -->
@section('css')
@endsection

<!-- variable pour activation des rubriques du menu -->
@php ($niv1 = "administrateurs")
@php ($niv2 = "")

<!-- variables breadcrumb -->
@php ($titre = "Administrateurs")
@php ($bread1 = "Administrateurs")
@php ($bread2 = "")
@php ($icon = "far fa-star")

<!-- ajout du contenu -->
@section('content')
<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Liste des Administrateurs</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="fullscreen-link">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                  
                               
                        
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Email</th>
                                        <th>Zone(s) autorisée(s)</th>
                                        <th>Modif. état</th>
                                        <th>Statut</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{!! $user->id !!}</td>
                                            <td class="text-primary"><strong>{!! $user->lastName !!}</strong></td>
                                            <td class="text-primary"><strong>{!! $user->firstName !!}</strong></td>
                                            <td class="text-primary"><strong>{!! $user->email !!}</strong></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            
                                          


                                        </tr>
                                    @endforeach
                                  </tbody>
                            </table>
                        
                     
                    </div>










                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- ajout de js -->
@section('js')
@endsection