@extends('layouts.app')

<!-- ajour de css -->
@section('css')
@endsection

<!-- variable pour activation des rubriques du menu -->
@php ($niv1 = "projets")
@php ($niv2 = "")

<!-- variables breadcrumb -->
@php ($titre = "Vos projets")
@php ($bread1 = "Vos projets")
@php ($bread2 = "")
@php ($icon = "fas fa-project-diagram")

<!-- ajour du contenu -->
@section('content')
<div class="wrapper wrapper-content animated fadeIn">
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Liste des projets</h5>
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
            <div class="row m-b-sm m-t-sm">
                    <div class="col-md-4" align="center">
                            <div class="input-group"><input type="text" placeholder="Rechercher un projet" class="form-control-sm form-control"> <span class="input-group-btn">
                                <button type="button" class="btn btn-sm btn-primary"> Ok</button> </span></div>
                        </div>
                <div class="col-md-8" align="right">
                    <button type="button" id="loading-example-btn" class="btn btn-primary btn-sm" ><i class="fa fa-refresh"></i>Creer un projet</button>
                </div>
                
            </div>

            <div class="project-list">

                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td class="project-Statut">
                            <span class="label label-primary">En cours</span>
                        </td>
                        <td class="project-title">
                            <a href="project_detail.html">Contract with Zender Company</a>
                            <br/>
                            <small>Crée le 14.08.2014</small>
                        </td>
                        <td class="project-completion">
                                <small>Etat d'avancement: 48%</small>
                                <div class="progress progress-mini">
                                    <div style="width: 48%;" class="progress-bar"></div>
                                </div>
                        </td>
                      
                        <td class="project-actions">
                            <a href="#" class="btn btn-white btn-sm"><i class="far fa-eye"></i> Voir </a>
                            <a href="#" class="btn btn-white btn-sm"><i class="fas fa-edit"></i> Modifier </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="project-Statut">
                            <span class="label label-primary">En cours</span>
                        </td>
                        <td class="project-title">
                            <a href="project_detail.html">There are many variations of passages</a>
                            <br/>
                            <small>Crée le 11.08.2014</small>
                        </td>
                        <td class="project-completion">
                            <small>Etat d'avancement: 28%</small>
                            <div class="progress progress-mini">
                                <div style="width: 28%;" class="progress-bar"></div>
                            </div>
                        </td>
                        
                        <td class="project-actions">
                            <a href="#" class="btn btn-white btn-sm"><i class="far fa-eye"></i> Voir </a>
                            <a href="#" class="btn btn-white btn-sm"><i class="fas fa-edit"></i> Modifier </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="project-Statut">
                            <span class="label label-default">Archivé</span>
                        </td>
                        <td class="project-title">
                            <a href="project_detail.html">Many desktop publishing packages and web</a>
                            <br/>
                            <small>Crée le 10.08.2014</small>
                        </td>
                        <td class="project-completion">
                            <small>Etat d'avancement: 8%</small>
                            <div class="progress progress-mini">
                                <div style="width: 8%;" class="progress-bar"></div>
                            </div>
                        </td>
                       
                        <td class="project-actions">
                            <a href="#" class="btn btn-white btn-sm"><i class="far fa-eye"></i> Voir </a>
                            <a href="#" class="btn btn-white btn-sm"><i class="fas fa-edit"></i> Modifier </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="project-Statut">
                            <span class="label label-primary">En cours</span>
                        </td>
                        <td class="project-title">
                            <a href="project_detail.html">Letraset sheets containing</a>
                            <br/>
                            <small>Crée le 22.07.2014</small>
                        </td>
                        <td class="project-completion">
                            <small>Etat d'avancement: 83%</small>
                            <div class="progress progress-mini">
                                <div style="width: 83%;" class="progress-bar"></div>
                            </div>
                        </td>
                       
                        <td class="project-actions">
                            <a href="#" class="btn btn-white btn-sm"><i class="far fa-eye"></i> Voir </a>
                            <a href="#" class="btn btn-white btn-sm"><i class="fas fa-edit"></i> Modifier </a>
                        </td>
                    </tr>
                    
                     </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>  

<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Fiche projet</h5>
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
                    <div class="m-b-md">
                        <a href="#" class="btn btn-white btn-xs float-right">Modifier le projet</a>
                        <h2>Contract with Zender Company</h2>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <dl class="row mb-0">
                        <div class="col-sm-4 text-sm-right"><dt>Statut:</dt> </div>
                        <div class="col-sm-8 text-sm-left"><dd class="mb-1"><span class="label label-primary">Actif</span></dd></div>
                    </dl>
                    <dl class="row mb-0">
                        <div class="col-sm-4 text-sm-right"><dt>Créé par:</dt> </div>
                        <div class="col-sm-8 text-sm-left"><dd class="mb-1">Alex Smith</dd> </div>
                    </dl>
                    <dl class="row mb-0">
                        <div class="col-sm-4 text-sm-right"><dt>Priorité:</dt> </div>
                        <div class="col-sm-8 text-sm-left"> <dd class="mb-1">  Haute</dd></div>
                    </dl>
                    
                    </div>
                <div class="col-lg-6" id="cluster_info">

                    <dl class="row mb-0">
                        <div class="col-sm-4 text-sm-right">
                            <dt>Dernière mise à jour:</dt>
                        </div>
                        <div class="col-sm-8 text-sm-left">
                            <dd class="mb-1">16.08.2014 12:15:57</dd>
                        </div>
                    </dl>
                    <dl class="row mb-0">
                        <div class="col-sm-4 text-sm-right">
                            <dt>Créé le:</dt>
                        </div>
                        <div class="col-sm-8 text-sm-left">
                            <dd class="mb-1"> 10.07.2014 23:36:57</dd>
                        </div>
                    </dl>
                    <dl class="row mb-0">
                        <div class="col-sm-4 text-sm-right">
                            <dt>Participants:</dt>
                        </div>
                        <div class="col-sm-8 text-sm-left">
                            <dd class="project-people mb-1">
                                <a href=""><img alt="image" class="rounded-circle" src="img/a3.jpg"></a>
                                <a href=""><img alt="image" class="rounded-circle" src="img/a1.jpg"></a>
                                <a href=""><img alt="image" class="rounded-circle" src="img/a2.jpg"></a>
                                <a href=""><img alt="image" class="rounded-circle" src="img/a4.jpg"></a>
                                <a href=""><img alt="image" class="rounded-circle" src="img/a5.jpg"></a>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-12">
                    <dl class="row mb-0">
                        <div class="col-sm-2 text-sm-right">
                            <dt>Description:</dt>
                        </div>
                        <div class="col-sm-10 text-sm-left">
                        
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look
                                even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                            </p>



                        </div>
                    </dl>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <dl class="row mb-0">
                        <div class="col-sm-2 text-sm-right">
                            <dt>Etat d'avancement:</dt>
                        </div>
                        <div class="col-sm-10 text-sm-left">
                            <dd>
                                <div class="progress m-b-1">
                                    <div style="width: 60%;" class="progress-bar progress-bar-striped progress-bar-animated"></div>
                                </div>
                                <small>Project Etat d'avancement in <strong>60%</strong>. Remaining close the project, sign a contract and invoice.</small>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Vie du projet</h5>
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




            <div class="row m-t-sm">
                <div class="col-lg-12">
                <div class="panel blank-panel">
                <div class="panel-heading">
                    <div class="panel-options">
                        <ul class="nav nav-tabs">
                            <li><a class="nav-link active" href="#tab-1" data-toggle="tab">Messages</a></li>
                            <li><a class="nav-link" href="#tab-2" data-toggle="tab">Dernières modifications</a></li>
                            <li><a class="nav-link" href="#tab-3" data-toggle="tab">Planification</a></li>
                            <li><a class="nav-link" href="#tab-4" data-toggle="tab">Documents téléchargés</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">

                <div class="tab-content">
                <div class="tab-pane active" id="tab-1">
                    <div class="feed-activity-list">
                        <div class="feed-element">
                            <a href="#" class="float-left">
                                <img alt="image" class="rounded-circle" src="img/a2.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="float-right">2h ago</small>
                                <strong>Mark Johnson</strong>
                                <div class="well">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </div>
                            </div>
                        </div>
                             
                        <div class="feed-element">
                            <a href="#" class="float-left">
                                <img alt="image" class="rounded-circle" src="img/a2.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="float-right">2h ago</small>
                                <strong>Mark Johnson</strong><br>

                               <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                               </p>
                            </div>
                        </div>

                        <div class="feed-element">
                            <a href="#" class="float-left">
                                <img alt="image" class="rounded-circle" src="img/a2.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="float-right">2h ago</small>
                                <strong>Mark Johnson</strong>
                                <div class="well">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>



                    <div class="social-comment">
                        <a href="" class="float-left">
                            <img alt="image" src="img/a3.jpg">
                        </a>
                        <div class="media-body">
                             <textarea class="form-control" placeholder="Write comment..."></textarea>
                        </div>
                    </div>





                </div>
                <div class="tab-pane" id="tab-2">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Statut</th>
                            <th>Title</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Comments</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <span class="label label-primary"><i class="fa fa-check"></i> Etat d'avancement</span>
                            </td>
                            <td>
                               Create project in webapp
                            </td>
                            <td>
                               12.07.2014 10:10:1
                            </td>
                            <td>
                                14.07.2014 10:16:36
                            </td>
                            <td>
                            <p class="small">
                                Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                            </p>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                            </td>
                            <td>
                                Various versions
                            </td>
                            <td>
                                12.07.2014 10:10:1
                            </td>
                            <td>
                                14.07.2014 10:16:36
                            </td>
                            <td>
                                <p class="small">
                                    Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </p>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                            </td>
                            <td>
                                There are many variations
                            </td>
                            <td>
                                12.07.2014 10:10:1
                            </td>
                            <td>
                                14.07.2014 10:16:36
                            </td>
                            <td>
                                <p class="small">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                </p>
                            </td>

                        </tr>
                       
                        </tbody>
                    </table>

                </div>

                <div class="tab-pane" id="tab-3">

                   kanban

                </div>

                <div class="tab-pane" id="tab-3">

                    doc
 
                 </div>
 



                </div>

                </div>

                </div>
                </div>
            </div> </div> </div> </div></div> </div>
       

@endsection

<!-- ajour de js -->
@section('js')
@endsection