@extends('layouts.app', ['atts' => 'd-flex flex-column', 'title_suffix' => __('Register')])

@section('content')
    @component('components.page.page-center-container')

        @component('components.form.form', ['action' => route('register'), 'title' => 'Register', 'submit' => 'Register'])

            @include('components.form.form-input', ['title' => 'Name', 'name' => 'name', 'type' => 'text', 'placeholder' => 'Enter your name'])
            @include('components.form.form-input', ['title' => 'Email address', 'name' => 'email', 'type' => 'email', 'placeholder' => 'your@email.com'])

            @component('components.form.form-input', ['title' => 'Password', 'name' => 'password', 'type' => 'password', 'placeholder' => 'Your password', 'attr' => 'autocomplete=off'])
                @include('components.form.show-password')
            @endcomponent

            @component('components.form.form-input', ['title' => 'Confirm password', 'name' => 'password_confirmation', 'type' => 'password', 'placeholder' => 'Your password', 'attr' => 'autocomplete=off', 'errid' => 'password', 'show_error' => false])
                @include('components.form.show-password')
            @endcomponent

        @endcomponent

        @component('components.form.form-bottom')
            @lang('Already have account?') <a href="{{ route('login') }}" tabindex="-1">@lang('Log in')</a>
        @endcomponent

    @endcomponent
@endsection
