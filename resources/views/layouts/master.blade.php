<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>G-stock</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }} ">


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles

    <!-- haut de l'application -->
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <x-topnav />

        <!--fin du haut de la page l'application -->

        <!-- La navigation de l'application -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="{{ asset(" assets/img/logo.png") }}" class="brand-link">
                <img src="{{ asset(" assets/img/logo.png") }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-4" style="opacity: .8">
                <span class="brand-text font-weight-bold" style="font-size: 0.9em;"><b>Gestion Client</b></span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset(" assets/img/user.png")}}" alt="User Avatar"
                            class="img-size-50 mr-3 img-circle">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">nnn</a>
                    </div>
                </div>


                <x-menu />

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


        <x-sidebar />

        <!-- contenu de la page -->

        <!-- pied de la page -->

        <footer class="main-footer">
            <div style="text-align: center;">
                <p>Copyright &copy; 2023 <a href="#">Gestion Client</a>. Tous droits réservés réalisé par <a
                        target="blanck" href="https://www.facebook.com/bitahdavidinfo">David</a> .</p>
            </div>

        </footer>
    </div>




    @livewireScripts

</body>

</html>
