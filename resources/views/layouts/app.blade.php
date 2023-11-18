<!DOCTYPE html>
<html lang="{{ $key }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite(['resources/sass/app.sass', 'resources/js/app.js'])
</head>
<body>
  @include('components.header')
  <!-- @yield('content') -->
  <!-- @include('components.header') -->
</body>
</html>