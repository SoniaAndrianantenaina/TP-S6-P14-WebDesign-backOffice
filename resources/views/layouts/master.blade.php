<!DOCTYPE HTML>
<html>

<head>
    <title>IA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ secure_asset('assets/css/main.css') }}" />
    <noscript>
        <link rel="stylesheet" href="{{ secure_asset('assets/css/noscript.css') }}" />
    </noscript>
</head>

<body class="is-preload">
    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <h1><a href="index.html">Solid State</a></h1>
            @if (session('idAdmin'))
                <nav>
                    <a href="#menu">Menu</a>
                </nav>
            </header>
            <!-- Menu -->
            <nav id="menu">
                <div class="inner">
                    <h2>Menu</h2>
                    <ul class="links">
                        <li><a href="{{ route('ajouterArticle') }}">Ajouter contenu</a></li>
                        <li><a href="{{ route('logout') }}">LOG OUT</a></li>
                    </ul>
                    <a href="#" class="close">Close</a>
                </div>
            </nav>
          
        @endif
        



        <main class="container">
            @yield('contenu')
        </main>

        <!-- Scripts -->
        <script src="{{ secure_asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ secure_asset('assets/js/jquery.scrollex.min.js') }}"></script>
        <script src="{{ secure_asset('assets/js/browser.min.js') }}"></script>
        <script src="{{ secure_asset('assets/js/breakpoints.min.js') }}"></script>
        <script src="{{ secure_asset('assets/js/util.js') }}"></script>
        <script src="{{ secure_asset('assets/js/main.js') }}"></script>

</body>

</html>
