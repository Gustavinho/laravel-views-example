<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name') }}</title>
  @laravelViewsStyles(livewire)
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/prism.css') }}">
</head>
<body >
  {{ $slot }}
  @laravelViewsScripts
  <script src="{{ asset('/js/prism.js') }}"></script>
</body>
</html>