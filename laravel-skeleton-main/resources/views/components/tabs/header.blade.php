@props([
    'tabs' => [],
])

<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
        @foreach($tabs as $id => $name)
            <li class="nav-item">
                <a href="#tab-{{$id}}" class="nav-link {{ $loop->first ? "active" : "" }}" data-bs-toggle="tab">{{ __($name) }}</a>
            </li>
        @endforeach
    </ul>
</div>
