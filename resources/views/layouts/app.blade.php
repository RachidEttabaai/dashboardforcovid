<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>COVID19 Dashboard @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('stylesheet')
  </head>
  <body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary border-bottom">
            <a class="navbar-brand" href="{{ route('home') }}">
                <em class="fa fa-globe" aria-hidden="true"></em>
                COVID19 Dashboard
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="navbar navbar-expand-md col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-4">
                    <ul class="nav flex-column text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('data') }}">
                                Data
                                <em class="fa fa-database" aria-hidden="true"></em>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Map
                                <em class="fa fa-map" aria-hidden="true"></em>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                About
                                <em class="fa fa-info-circle" aria-hidden="true"></em>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            @yield('content')
        </div>
    </div>
    <footer class="footer mt-auto py-3 border-top">
        <div class="container text-center">
            <span class="text-muted">
                &copy; 2021 - All rights reserved
            </span>
        </div>
    </footer>

    <script src="{{ secure_asset('js/app.js') }}" defer></script>
  </body>
</html>
