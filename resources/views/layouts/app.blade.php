<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>COVID19 Dashboard @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ secure_asset('js/app.js') }}" defer></script>
  </body>
</html>
