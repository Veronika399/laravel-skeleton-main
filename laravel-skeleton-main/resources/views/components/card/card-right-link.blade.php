@props([
    'url' => '',
    'title' => ''
])

<div class="ms-auto text-muted">
    <a class="btn btn-primary" href="{{ $url }}">{{ __($title) }}</a>
</div>

