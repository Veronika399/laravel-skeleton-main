@props([
    'theme' => null,
    'atts' => '',
    'title' => config('app.name'),
    'title_suffix' => null
])


<?php
    // Napravi title
    if ($title_suffix) $title = "$title - $title_suffix";

    // Ako nije postavljena tema uzmi korisnikovu, u suprotnom neka bude svijetla
    if ($theme === null) {
        if (auth()->check()) {
            // Ako korisnik želi promijeniti temu, promijeni (check za u bazu)
            $changeTheme = request('theme', '');
            if($changeTheme) auth()->user()->update(['theme' => $changeTheme === 'dark' ? 'dark' : 'light']);
            $theme = auth()->user()->theme;
        } else {
            $theme = "light";
        }
    }

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        @vite('resources/js/app.js')

        <script>
            var BASE_URL = "{{ url('/') }}";
            var CURRENT_URL = "{{ url()->current() }}";
            var AX_URL = "{{ url('/ax') }}/";
        </script>

    </head>

    <body class="{{ $atts }}" data-bs-theme="{{ $theme }}">
        <div class="page">
            @yield('content')
        </div>
    </body>
</html>
