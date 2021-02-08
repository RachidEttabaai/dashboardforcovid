<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>COVID19 Dashboard @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    @if (Request::path() == "/")
	    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @endif
    @yield('stylesheet')
  </head>
  <body>

    <div class="container-fluid">
        <div class="row">

            @yield('content')
        </div>
    </div>

    <script src="{{ secure_asset('js/app.js') }}" async></script>
    <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous" async></script>
  </body>
</html>
