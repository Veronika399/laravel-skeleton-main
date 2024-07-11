@props([
    'slot' => '',
    'id' => 'general',
    'active' => false
])

<div class="tab-pane {{ $active ? "active" : "" }} pt-3" id="tab-{{$id}}">
    {{ $slot }}
</div>
