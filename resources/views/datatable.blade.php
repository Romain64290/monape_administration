@extends('layouts.app')

<!-- ajout de css -->
@section('css')
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

<!-- variable pour activation des rubriques du menu -->
@php ($niv1 = "administration")
@php ($niv2 = "")

<!-- variables breadcrumb -->
@php ($titre = "Administration")
@php ($bread1 = "Administration")
@php ($bread2 = "")
@php ($icon = "fas fa-cog")

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
                  
                               
                             <div class="table-responsive">

                                   <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Prenom</th>
                                                    <th>Email</th>
                                                    <th>Zone(s) autorisée(s)</th>
                                                    <th>Modif. état</th>
                                                    <th>Statut</th>
                                                </tr>
                                            </thead>
                                        </table>
                                 
                        
                     
                    </div></div>










                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- ajout de js -->
@section('js')
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        responsive: true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        },   

        ajax: '{{ route('datatable/getdata') }}',
        columns: [
            {data: 'lastName', name: 'lastName'},
            {data: 'firstName', name: 'firstName'},           
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false,className: 'dt-body-center'},
            {data: 'delete', name: 'delete', orderable: false, searchable: false, width: "15%"},
            {data: 'zone', name: 'zone', orderable: false, searchable: false},
        ]
    });
});
</script>
@endsection