<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 1st Project</title>
    </head>
    <body>
        <h1>Default</h1>
        <header>
            <nav>
                <x-nav-link href="/dashboard/phpMiniProyecto/public/">Home</x-nav-link>
                <x-nav-link href="/dashboard/phpMiniProyecto/public/about">About</x-nav-link>
                <x-nav-link href="/dashboard/phpMiniProyecto/public/contact">Contact</x-nav-link>
            </nav>
        </header>
        {{ $slot }}
    </body>
</html>
