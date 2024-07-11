@props([
    'method' => 'POST',
    'action' => '',
    'title' => '',
    'submit' => 'Submit',
    'slot' => '',
    'errors' => array(),
    'atts' => ''
])

<form class="card" method="{{ $method }}" action="{{ $action }}" {{ $atts }} autocomplete="off" novalidate>
    @csrf
    <div class="card-header">
        <h3 class="card-title">{{ __($title) }}</h3>
    </div>
    <div class="card-body">
        {{ $slot }}
        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">{{ __($submit) }}</button>
        </div>
    </div>
</form>
