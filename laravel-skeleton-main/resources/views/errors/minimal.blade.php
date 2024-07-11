@extends('layouts.app', ["atts" => "border-top-wide border-primary d-flex flex-column", "theme" => "dark"])

@section('content')
    @component('components.page.page-center-container')
        <div class="empty">
            <div class="empty-header">@yield('code')</div>
            <p class="empty-title">@yield('title')</p>
            <p class="empty-subtitle text-muted">
                @yield('message')
            </p>
            <div class="empty-action">
                <a href="{{ route('home') }}"
                   class="btn btn-primary">@include('components.icons.back') @lang("Take me back")</a>
            </div>
        </div>
    @endcomponent
@endsection
