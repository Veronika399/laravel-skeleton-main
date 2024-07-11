@props([
    'title' => 'Checkbox',
    'name' => 'check',
    'checked' => false,
    'value' => 1,
])

<div class="mb-2">
    <label class="form-check">
        <input type="checkbox" value="{{ $value }}" name="{{ $name }}" id="{{ $name }}" class="form-check-input" {{ (old() ? old($name, false) : $checked) ? 'checked' : '' }}>
        <span class="form-check-label">@lang("$title")</span>
    </label>
</div>
