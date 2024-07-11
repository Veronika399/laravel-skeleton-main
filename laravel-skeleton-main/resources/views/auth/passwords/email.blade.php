@extends('layouts.app', ['atts' => 'd-flex flex-column'])

@section('content')

    @component('components.page.page-center-container')

        @component('components.form.form', ['action' => route('password.email'), 'title' => 'Change password', 'comment' => 'Enter your email address and we will send you a link to reset your password', 'submit' => 'Send a reset password link'])

            @include('components.form.form-input', ['title' => 'Email address', 'name' => 'email', 'type' => 'email', 'placeholder' => 'your@email.com'])

            @if(session('status'))
                <p class="text-muted">{{ session('status') }}</p>
            @endif

        @endcomponent

        @component('components.form.form-bottom')
            @lang('Forget it'), <a href="{{ route('home') }}">@lang('send me back')</a>
        @endcomponent

    @endcomponent

@endsection
