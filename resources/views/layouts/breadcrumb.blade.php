<!-- Content Header (Page header) -->
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="container-fluid marginbread">
    <div class="row mb-2">
      <div class="col-sm-6">
          <h2 class="reduce-h2-top">{{$titre}}</h2>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li><a href="#"><i class="{{$icon}}"></i>&nbsp;&nbsp;</a></li>
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Accueil</a></li>
          <li class="breadcrumb-item">{{$bread1}}</li>
          
          @if ($bread2 <> "")
           <li class="breadcrumb-item">{{$bread2}}</li>
          @endif

        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
