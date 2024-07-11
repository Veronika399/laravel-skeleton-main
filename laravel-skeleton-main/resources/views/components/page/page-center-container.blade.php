@props([
    'container' => 'container-tight',
])

<div class="page page-center">
    <div class="container {{ $container }} py-4">
        {{ $slot }}
    </div>
</div>
