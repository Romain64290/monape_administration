<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element perso">
                    <div style="text-align:center"><img src="img/logo.png" class="logo-menu" alt="logo"> MonApe.org </div>

                     <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="img/avatar.png" class="img-circle image-menu" alt="User Image">
            </div>
            <div class="pull-left info">
              <p class="nom-menu">Romain  TALDU</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-info"></i> En ligne</a>
            </div>
          </div>
                    
                </div>
                <div class="logo-element">
                    <img src="img/logo.png" class="logo-menu" alt="logo">
                </div>
            </li>
            
          <!--  <li class="label-menu">MENU DE NAVIGATION</li> Ne disparait pas en petit-->

          @if ($niv1 == "dashboard") <li class="active"> @else <li>  @endif            
                <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span class="nav-label">Tableau de bord</span></a>
                
            </li>

            @if ($niv1 == "membres") <li class="active"> @else <li>  @endif 
                <a href="{{ route('membres') }}"><i class="fa fa-address-card"></i> <span class="nav-label">Les Membres</span></a>
            </li>

            @if ($niv1 == "reunions") <li class="active"> @else <li>  @endif 
                <a href="{{ route('reunions') }}"><i class="fa fa-users"></i> <span class="nav-label">Vos Réunions</span> </a>
            </li>

            @if ($niv1 == "projets") <li class="active"> @else <li>  @endif 
                <a href="{{ route('projets') }}"><i class="fas fa-project-diagram"></i> <span class="nav-label">Vos Projets</span> </a>
            </li>

            @if ($niv1 == "comptabilite") <li class="active"> @else <li>  @endif 
                <a href="{{ route('comptabilite') }}"><i class="fa fa-calculator"></i> <span class="nav-label">Comptabilité</span> </a>
            </li>

            @if ($niv1 == "siteweb") <li class="active"> @else <li>  @endif 
                <a href="{{ route('siteweb') }}"><i class="fa fa-desktop"></i> <span class="nav-label">Site web</span> </a>
            </li>

            @if ($niv1 == "administrateurs") <li class="active"> @else <li>  @endif 
                <a href="{{ route('administrateurs') }}"><i class="far fa-star"></i> <span class="nav-label">Administrateurs</span><span class="label label-warning float-right">2</span></a>

             @if ($niv1 == "suggestions") <li class="active"> @else <li>  @endif 
            <li>
                <a href="{{ route('suggestions') }}"><i class="fas fa-comment-dots"></i> <span class="nav-label">Vos suggestions</span> </a>
            </li>
        </ul>

    </div>
</nav>