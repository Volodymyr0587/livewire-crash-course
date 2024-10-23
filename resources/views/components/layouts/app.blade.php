<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav>
            <a href="/counter" wire:navigate>Counter</a>
            <a href="/birds" wire:navigate>Birds</a>
            <a href="/lazy" wire:navigate>Lazy</a>
        </nav>
        {{ $slot }}
    </body>
</html>
