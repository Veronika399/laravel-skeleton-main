@props([
    'routes' => '',
    'link' => '',
    'slot' => '',
    'title' => 'Naslov',
    'icon' => $routes,
])

<a class="dropdown-item {{ Route::is($routes) ? 'active' : '' }}" href="{{ $link }}">
    <span class="nav-link-icon d-md-none d-lg-inline-block">
        <i class="ti ti-{{ $icon }}"></i>
        {{ $slot }}
    </span>
    {{ __($title) }}
</a>
