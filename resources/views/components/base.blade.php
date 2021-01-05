<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }}</title>
  @laravelViewsStyles(livewire)
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/prism.css') }}">
</head>
<body class="">
  <div class="border-b border-gray-200 px-4 py-2 fixed top-0 left-0 w-full bg-white z-10">
    <div class="flex items-center justify-between mx-auto max-w-7xl">
      <a href="/">
        <span class="text-900 font-bold text-xl px-2">Laravel views</span>
      </a>
      <div class="flex items-center">
        <a href="https://github.com/Gustavinho/laravel-views" class="flex items-center justify-center rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out h-12 w-12">
          <span class="sr-only">Github</span>
          <i data-feather="github"></i>
        </a>
        <button @click="mobileMenu = true" type="button" class="lg:hidden -mr-3 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900">
          <span class="sr-only">Open sidebar</span>
          <!-- Heroicon name: menu -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>
  <div class="mt-16">
    {{ $slot }}
  </div>
  @laravelViewsScripts
  <script src="{{ asset('/js/prism.js') }}"></script>
</body>
</html>