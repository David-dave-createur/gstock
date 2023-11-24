
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gestion Client</title>

<!-- style css -->
<link rel="stylesheet" href="{{ asset("plugins/fontawesome-free/css/all.min.css") }}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset("dist/css/adminlte.min.css?v=3.2.0") }}">
<link rel="stylesheet" href="{{ asset("plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css") }}">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }} " >
<link rel="stylesheet" href="{{ asset("style.css") }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">



@livewireStyles

<!-- haut de l'application -->
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<x-topnav/>

<!--fin du haut de la page l'application -->

<!-- La navigation de l'application -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="{{ asset("assets/img/logo.png") }}" class="brand-link">
 <img src="{{ asset("assets/img/logo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-4" style="opacity: .8">
<span class="brand-text font-weight-bold" style="font-size: 0.9em;"><b>Gestion Client</b></span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{ asset("assets/img/user.png")}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
</div>
<div class="info">
<a href="#" class="d-block">{{ userFullName() }}</a>
</div>
</div>


<x-menu/>

</div>

</aside>

<!-- fin de navigation de la page -->

<!-- contenu de la page -->

<div class="content-wrapper">


<div class="content">
<div class="container-fluid">
   @yield("contenu")

</div>
</div>

</div>


<x-sidebar/>

<!-- contenu de la page -->

<!-- pied de la page -->

<footer class="main-footer">
<div style="text-align: center;">
   <p >Copyright &copy; 2023 <a href="#">Gestion Client</a>. Tous droits réservés réalisé par <a target="blanck" href="https://www.facebook.com/bitahdavidinfo">David</a> .</p>
</div>

</footer>
</div>

<!-- script js -->
<script src="{{ asset("plugins/jquery/jquery.min.js") }}"></script>
<script src="{{ asset("plugins/jquery/jquery.js") }}"></script>
<script src="{{ asset("plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("plugins/bootstrap/js/bootstrap.bundle.js") }}"></script>
<script src="{{ asset("plugins/bootstrap/js/bootstrap.js") }}"></script>
<script src="{{ asset("dist/js/adminlte.min.js?v=3.2.0") }}"></script>
<script src="{{ asset("plugins/sweetalert2/sweetalert2.all.js") }}"></script>
<script src="{{ asset("plugins/sweetalert2/sweetalert2.all.min.js") }}"></script>
<script src="{{ asset("plugins/sweetalert2/sweetalert2.js") }}"></script>
<script src="{{ asset("plugins/sweetalert2/sweetalert2.min.js") }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



@livewireScripts

</body>
</html>
