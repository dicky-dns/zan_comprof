<!doctype html>
<html lang="id">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>

    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <link href="https://fonts.googleapis.com/css2?family=Baskervville&family=Hanken+Grotesk&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/backend/css/backend.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/app.css' . '?v=' . time()) }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/splide-default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}">
    @yield('header')
</head>

<body id="body-pd" class="body-pd">

    @include('components.dashboard.navigation')

    <div class="height-100 py-1">
        @yield('content')
    </div>

    <script src="{{ asset('assets/frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
    @yield('extrascript')
</body>

</html>
