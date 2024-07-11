@props([
    'slot' => '',
])

<div class="card-body pt-0">
    <div class="tab-content">{{ $slot }}</div>
</div>
