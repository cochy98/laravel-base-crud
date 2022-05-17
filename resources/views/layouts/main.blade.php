<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- Visualizzo con la funzione '@yield' il titolo della pagina corrente --}}
  <title>Laravel Base CRUD - @yield('title')</title>

  {{-- Importo il foglio di stile --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  {{-- Includo l'header --}}
  @include('partials.header')

  <main>
    {{-- Visualizzo la pagina corrente --}}
    @yield('main')
  </main>
  
</body>
</html>
