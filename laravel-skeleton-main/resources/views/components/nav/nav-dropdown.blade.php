@props([
    'routes' => '',
    'icon' => '',
    'slot' => '',
    'title' => 'Naslov',
])

<li class="nav-item dropdown {{ Route::is($routes) ? 'active' : '' }}">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <i class="ti ti-{{ $icon }}"></i>
        </span>
        <span class="nav-link-title">{{ __($title) }}</span>
    </a>
    <div class="dropdown-menu">{{ $slot }}</div>
</li>
