@props([
    'title' => 'Title',
    'type' => 'success'
])

<div class="m-4 alert alert-important alert-{{ $type }} alert-dismissible mb-0" role="alert">
    <div class="d-flex">
        <div>
            {{ __($title) }}
        </div>
    </div>
    <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
</div>
