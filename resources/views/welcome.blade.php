<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') — {{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700|Bebas+Neue&display=swap">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('styles')

  </head>
  <body>
    <main>
      @yield('content')
    </main>

    <script src="{{ mix('js/app.js') }}"></script>
    @stack('scripts')
  </body>
</html>
