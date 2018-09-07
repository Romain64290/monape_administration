<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <link href="template/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/font-awesome/css/all.css" rel="stylesheet">
    <link href="template/css/animate.css" rel="stylesheet">
    <link href="template/css/style.css" rel="stylesheet">
       
    @yield('css')

    <link href="css/customized_style.css" rel="stylesheet">

</head>

<body>

<!-- Wrapper-->
<div id="wrapper">

 <!-- Navigation -->
 @include('layouts.navigation',['niv1' => $niv1, 'niv2' => $niv2]) 

<!-- Page wraper -->
<div id="page-wrapper" class="gray-bg dashbard-1">
        
           
<!-- Page wrapper -->
@include('layouts.topnavbar')
 

<!-- Page titre et fil d ariane -->
@include('layouts.breadcrumb',['titre' => $titre, 'bread1' => $bread1, 'bread2' => $bread2, 'icon' => $icon])



<!-- Main view  -->
@yield('content')

<!-- Footer -->
@include('layouts.footer')


    </div>
</div>

<!-- Mainly scripts -->
<script src="template/js/jquery-3.1.1.min.js"></script>
<script src="template/js/popper.min.js"></script>
<script src="template/js/bootstrap.min.js"></script>
<script src="template/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="template/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

@yield('js')

<!-- Custom and plugin javascript -->
<script src="template/js/inspinia.js"></script>
<script src="template/js/plugins/pace/pace.min.js"></script>


</body>

</html>
