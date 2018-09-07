@extends('layouts.app')

<!-- ajout de css -->
@section('css')
@endsection

<!-- variable pour activation des rubriques du menu -->
@php ($niv1 = "monProfil")
@php ($niv2 = "")

<!-- variables breadcrumb -->
@php ($titre = "Mon profil")
@php ($bread1 = "Mon profil")
@php ($bread2 = "")
@php ($icon = "fa fa-user")

<!-- ajout du contenu -->
@section('content')

        <div class="wrapper wrapper-content animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Modifier ma photo</h5>
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
            

    <div class="row">
        <div class="col-lg-12">
            <div class="text-center m-t-lg">
               
                <p>Upload de photo.
                </p>
            </div>
        </div>
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