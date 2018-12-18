<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel React application</title>
    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <noscript>
    You need to enable JavaScript to run this app.
    </noscript>
    <!-- react root point -->
    <div id="root"></div>
    <script src="{{mix('js/app.js')}}" ></script>
  </body>
</html>
