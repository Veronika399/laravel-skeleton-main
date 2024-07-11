@props([
    'title' => 'Submit',
    'primary' => false
])

<button type="submit" class="btn {{ $primary ? 'btn-primary' : '' }}">{{ __($title) }}</button>
