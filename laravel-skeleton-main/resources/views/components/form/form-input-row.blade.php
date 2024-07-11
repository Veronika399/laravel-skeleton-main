@props([
    'name' => 'name',
    'title' => "input.$title",
    'errid' => $name,
    'type' => '',
    'placeholder' => '',
    'slot' => '',
    'attr' => '',
    'value' => '',
    'errors' => array(),
    'show_error' => true
])

<?php
    $thiserrors = array_filter($errors->get($errid));
?>

<div class="mb-3 row">
    <label for="{{ $name}}" class="col-3 col-form-label">@lang("$title")</label>
    <div class="col">
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" value="{{ old($name, $value) }}" class="{{ $thiserrors ? 'is-invalid ' : '' }}form-control" placeholder="{{ $placeholder }}" {{ $attr }}>
        <div class="invalid-feedback">
            @if($show_error)
                @foreach ($thiserrors as $error)
                    {{ $error }}<br>
                @endforeach
            @endif
        </div>
    </div>
    {{ $slot }}
</div>
