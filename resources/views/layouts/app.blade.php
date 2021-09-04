<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tailwind playground</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        #menu-toggle:checked + #menu {
          display: block;
        }
    </style>
</head>
<body>
    <div id="app">
        <header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-0 py-2">
            <div class="flex-1 flex justify-between items-center">
               <img class="h-8" src="{{ asset('images/credit.svg')}}" alt="Credit">
          </div>
        
           <label for="menu-toggle" class="pointer-cursor sm:hidden block"><i class="text-2xl fas fa-bars"></i></label>
          <input class="hidden" type="checkbox" id="menu-toggle" />
        
          <div class="hidden sm:flex sm:items-center sm:w-auto w-full" id="menu">
            <nav>
              <ul class="sm:flex items-center justify-between text-base text-gray-700 pt-4 sm:pt-0">
                <li><a class="lg:p-4 py-3 px-1 block border-b-2 border-transparent hover:no-underline hover:border-indigo-400" href="#">Features</a></li>
                <li><a class="lg:p-4 py-3 px-1 block border-b-2 border-transparent hover:no-underline hover:border-indigo-400" href="#">Pricing</a></li>
                <li><a class="lg:p-4 py-3 px-1 block border-b-2 border-transparent hover:no-underline hover:border-indigo-400" href="#">Documentation</a></li>
                <li><a class="lg:p-4 py-3 px-1 block border-b-2 border-transparent hover:no-underline hover:border-indigo-400" href="#">Support</a></li>
                <a href="#" class="lg:ml-4 flex items-center justify-start lg:mb-0 mb-4 pointer-cursor">
                    <img class="rounded-full w-10 h-10 border-2 border-transparent hover:border-indigo-400" src="{{ asset('images/avatar.svg')}}" alt="Andy Leverenz">
                </a>
              </ul>
            </nav>
            </div>
        
        </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
