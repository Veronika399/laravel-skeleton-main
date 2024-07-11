@props([
    'method' => 'POST',
    'action' => '/',
    'title' => 'Title',
    'submit' => 'Submit',
    'slot' => '',
    'comment' => '',
    'id' => ''
])

<div class="modal modal-blur fade" id="{{ $id }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form method="{{ $method }}" action="{{ $action }}" class="modal-content" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
            <h5 class="modal-title">{{ __($title) }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="text-muted mb-4">{{ __($comment) }}</p>
            {{ $slot }}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Zatvori</button>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">{{ __($submit) }}</button>
        </div>
        </form>
    </div>
</div>
