<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{public_path('/loader.css')}}" />
        <!-- Scripts -->
        @routes
        @vite(['resources/js/main.ts', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        <div id="loading-bg">
            <div class="loading-logo">
                <img src="{{public_path("/logo.png")}}" height="50" alt="Logo" />
            </div>
            <div class="loading">
                <div class="effect-1 effects"></div>
                <div class="effect-2 effects"></div>
                <div class="effect-3 effects"></div>
            </div>
        </div>
        <script>
          const loaderColor = localStorage.getItem('Materio-initial-loader-bg') || '#FFFFFF'
          const primaryColor = localStorage.getItem('Materio-initial-loader-color') || '#9155FD'

          if (loaderColor)
            document.documentElement.style.setProperty('--initial-loader-bg', loaderColor)
          if (primaryColor)
            document.documentElement.style.setProperty('--initial-loader-color', primaryColor)

        </script>
    </body>
</html>
