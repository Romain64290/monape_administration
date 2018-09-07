@extends('layouts.app')

<!-- ajout de css -->
@section('css')
@endsection

<!-- variable pour activation des rubriques du menu -->
@php ($niv1 = "membres")
@php ($niv2 = "")

<!-- variables breadcrumb -->
@php ($titre = "Les membres")
@php ($bread1 = "Les membres")
@php ($bread2 = "")
@php ($icon = "fa fa-address-card")

<!-- ajout du contenu -->
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center m-t-lg">
                <h1>
                   A venir prochainement...
                </h1>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- ajout de js -->
@section('js')
@endsection