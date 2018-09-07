<div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

         <!--   <form r class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form> -->

      <!--     
    <form role="search" class="navbar-form-custom"action="search_results.html">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Recherche..." aria-label="Search">
        <div class="input-group-append marginsearch">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
-->


    </div>
      
    <ul class="nav navbar-top-links navbar-right">
        
        <li class="dropdown bell-pos">
            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="mailbox.html" class="dropdown-item">
                        <div>
                            <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                            <span class="float-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="dropdown-divider"></li>
                <li>
                    <a href="profile.html" class="dropdown-item">
                        <div>
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="float-right text-muted small">12 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="dropdown-divider"></li>
                <li>
                    <a href="grid_options.html" class="dropdown-item">
                        <div>
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="float-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="dropdown-divider"></li>
            </ul>
        </li>
    </ul>




        <div class="dropdown">

          <button class="dropbtn"><img src="img/avatar.png" alt="" class="px-navbar-image"> Romain TALDU</button>
          
          <div class="dropdown-content">
            <a href="{{ route('profil') }}"><i class="dropdown-icon fa fa-user"></i>&nbsp;&nbsp;Mon profil</a>
            <a href="#"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Se déconnecter</a>
          </div>
        </div>

      

</nav>

</div>