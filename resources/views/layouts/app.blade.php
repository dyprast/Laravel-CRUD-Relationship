<!-- DESIGN BY ROMADHAN EDY PRASETYO - RPL SMKN 10 JAKARTA -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gudang Romadhan</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}" defer></script>    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">    

    <!-- ICON -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.4.2-web/css/all.css') }}">
    <link rel="icon" href="{{ asset('img/icon.png') }}">
</head>
<body>
    <div id="app">
        <nav class="sidenav" id="sidenav-respons">
            <div class="header brand text-align-center">
                <i class="fas fa-warehouse h1"></i>
                <p class="h3">Gudang Romadhan</p>
            </div>
            <div class="menu">
                <a href="{{ url('./') }}" class="child-menu"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                <a href="{{ url('gudang') }}" class="child-menu"><i class="fas fa-warehouse"></i> Master Gudang</a>
                <a href="{{ url('barang') }}" class="child-menu"><i class="fas fa-shopping-cart"></i> Master Barang</a>
                <a href="{{ url('info') }}" class="child-menu"><i class="fas fa-info-circle"></i> Info</a>
            </div>
        </nav>
        <nav class="topnav">
            <div style="display: flex;">
                <button style="background-color: #38c172;color: #fff;" class="bars" onclick="sidenav()"><i class="fas fa-list"></i> Menu</button>
                <button style="background-color: #43baff;color: #fff;">{{ Auth::user()->name }}</button>
                <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> Keluar</button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </nav>
        <main class="py-4">
            <div class="content">
                @yield('content')
            </div>
        </main>
    </div>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
