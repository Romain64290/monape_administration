@extends('layouts.app')

<!-- ajout de css -->
@section('css')
@endsection

<!-- variable pour activation des rubriques du menu -->
@php ($niv1 = "dashboard")
@php ($niv2 = "")

<!-- variables breadcrumb -->
@php ($titre = "Tableau de bord")
@php ($bread1 = "Tableau de bord")
@php ($bread2 = "")
@php ($icon = "fas fa-tachometer-alt")

<!-- ajout du contenu -->
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center m-t-lg">
                <h1>
                    INSPINIA Seed Project  BS4
                </h1>
                <small>
                    It is an application skeleton  a typical web app. You can  it to quickly bootstrap your webapp projects and dev environment these projects.
                </small>
                <p>mon texte2</p>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- ajout de js -->
@section('js')
@endsection