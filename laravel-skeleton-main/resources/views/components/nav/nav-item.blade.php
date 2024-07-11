@props([
    'routes' => '',
    'icon' => $routes,
    'link' => '',
    'slot' => '',
    'title' => 'Title',
])

<li class="nav-item {{ Route::is($routes) ? 'active' : '' }}">
    <a class="nav-link" href="{{ $link }}">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <i class="ti ti-{{ $icon }}"></i>
        </span>
        <span class="nav-link-title">{{ __($title) }}</span>
    </a>
</li>
