<html lang="en">
@livewireStyles
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G-stock</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('connect/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('connect/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('connect/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('connect/css/iofrm-theme2.css') }}">
</head>


    @yield("form")

    <script src="{{ asset('connect/js/jquery.min.js') }}"></script>
    <script src="{{ asset('connect/js/popper.min.js') }}"></script>
    <script src="{{ asset('connect/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('connect/js/main.js') }}"></script>
@livewireScripts

</html>
