<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>COVID19 Dashboard - 404 Error</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  </head>
  <body>

    <div class="container-fluid">
        <div class="alert alert-danger text-center">
            <h2 class="display-3">404</h2>
            <p class="display-5">Oops! Something is wrong. The page you requested was not found.</p>
        </div>
    </div>

    <script src="{{ secure_asset('js/app.js') }}" async></script>
  </body>
</html>
