@props([
    'method' => 'POST',
    'action' => '',
    'title' => '',
    'submit' => 'Submit',
    'slot' => '',
    'comment' => '',
    'errors' => array(),
    'atts' => ''
])

<form class="card card-md" method="{{ $method }}" action="{{ $action }}" {{ $atts }} autocomplete="off" novalidate>
    @csrf
    <div class="card-body">
        <h2 class="h2 card-title text-center mb-3">{{ __($title) }}</h2>
        <p class="text-muted mb-4">{{ __($comment) }}</p>
        {{ $slot }}
        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">{{ __("$submit") }}</button>
        </div>
    </div>
</form>
