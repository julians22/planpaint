<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon and Icons -->
    <link rel="icon" type="image/png" href="{{ asset('favicon-96x96.png')}}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{asset('favicon.svg')}}" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}" />
    <meta name="apple-mobile-web-app-title" content="Plan Indonesia" />
    <link rel="manifest" href="{{asset('site.webmanifest')}}" />
    <!-- End of Favicon and Icons -->

    <title>
        @yield('title', 'Default Title') - {{ config('app.name', 'Laravel') }}
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @include('layouts.includes.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.includes.footer')

    @stack('scripts')

    <script>

        const logoImage = document.getElementById('logoImage');
        const gifSrc = logoImage.getAttribute('data-gif');

        logoImage.addEventListener('mouseover', () => {
            logoImage.src = gifSrc;
        });

        logoImage.addEventListener('mouseout', () => {
            logoImage.src = '{{ asset('img/logo.png') }}';
        });

    </script>

</body>
</html>
