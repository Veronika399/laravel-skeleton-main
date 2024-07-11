@props([
    'name' => 'name',
    'title' => "input.$name",
    'errid' => $name,
    'type' => 'text',
    'placeholder' => '',
    'slot' => '',
    'attr' => '',
    'value' => '',
    'errors' => array(),
    'show_error' => true
])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">@lang("$title")</label>
    <div class="row g-2">
        <div class="col">
            <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" value="{{ old($name, $value) }}" class="{{ array_filter($errors->get($errid)) ? 'is-invalid ' : '' }}form-control" placeholder="{{ __("$placeholder") }}" {{ $attr }}>
            <div class="invalid-feedback">
                @if($show_error)
                    @foreach (array_filter($errors->get($errid)) as $error)
                        {{ $error }}<br>
                    @endforeach
                @endif
            </div>
        </div>
        {{ $slot }}
    </div>
</div>
