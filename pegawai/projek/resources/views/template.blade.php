<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Pegawai</title>
    
    <link href="{{ asset('../public/bootstrap-4.4.1-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('../public/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
    @include('navbar')
    @yield('main')
    </div>

    @yield('footer')
    <script src="{{ asset('../public/js/jquery_2_2_1.min.js') }}"></script>
    <script src="{{ asset('../public/bootstrap-4.4.1-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../public/js/pegawai.js') }}"></script>
     
    
</body>
</html>

