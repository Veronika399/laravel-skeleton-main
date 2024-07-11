@props([
    'slot' => ''
])

<div class="card-header">
    <h3 class="card-title">{{ __($title) }}</h3>
    {{ $slot }}
</div>
