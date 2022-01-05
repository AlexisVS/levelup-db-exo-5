<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ @asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ @asset('css/tailwind.css') }}">
  <!-- Styles -->
  <style>
    [x-cloak] {
      display: none !important;
    }

  </style>
  @livewireStyles
</head>
<body class="min-h-screen dark:bg-gray-800 dark:text-gray-300">
  <x-layout.nav.navigation />
  <div class="sm:container mx-auto px-4 sm:px-20">
    {{ $slot }}
  </div>
  @livewireScripts
</body>
</html>
