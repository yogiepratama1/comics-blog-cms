<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Primary Meta Tags -->
    <title>DC Comics Events Reading Order</title>
    <meta name="title" content="DC Comics Events Reading Order">
    <meta name="description" content="The goal of this site is to be the most extensive resource for comic book reading orders on the internet.  We provide reading orders for characters and events from DC">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="easycomics">
    <meta property="og:title" content="DC Comics Events Reading Order">
    <meta property="og:description" content="The goal of this site is to be the most extensive resource for comic book reading orders on the internet.  We provide reading orders for characters and events from DC">
    <meta property="og:image" content="https://i.ibb.co/vdV7vS5/The-Flash-2016-The-Flash-2016-Issue-65-16.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="easycomics">
    <meta property="twitter:title" content="DC Comics Events Reading Order">
    <meta property="twitter:description" content="The goal of this site is to be the most extensive resource for comic book reading orders on the internet.  We provide reading orders for characters and events from DC">
    <meta property="twitter:image" content="https://i.ibb.co/vdV7vS5/The-Flash-2016-The-Flash-2016-Issue-65-16.jpg">

    <title>{{ config('app.name', 'EasyComics') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    @livewireScripts
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/trix.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    @stack('modals')
    <!-- Scripts -->
    <script src="/js/trix.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>

    <script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>

</body>

</html>