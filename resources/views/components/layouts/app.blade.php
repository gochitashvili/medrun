<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>

    <body class="flex flex-col min-h-screen justify-between">
        <div>
            <x-theme.header />
            <main class="wrapper">
                {{ $slot }}
            </main>
        </div>
        <x-theme.footer />
    </body>

</html>
