@extends('layouts.app', ['atts' => 'd-flex flex-column', 'title_suffix' => __('Login')])

@section('content')
    @component('components.page.page-center-container')

        @component('components.form.form', ['action' => route('login'), 'title' => 'Login', 'submit' => 'Login'])

            @include('components.form.form-input', ['name' => 'email', 'type' => 'email', 'placeholder' => 'your@email.com', 'attr' => 'required autofocus'])

            @component('components.form.form-input', ['name' => 'password', 'type' => 'password', 'placeholder' => 'Your password', 'attr' => 'autocomplete=off'])
                @slot('title')
                    @lang('Password')
                    <span class="form-label-description">
                        <a href="{{ route('password.request') }}">@lang('I forgot password')</a>
                    </span>
                @endslot

                @include('components.form.show-password')
            @endcomponent

            @include('components.form.form-check', ['title' => 'Remember me on this device', 'name' => 'remember'])

        @endcomponent

        @if(Route::has('register'))
            @component('components.form.form-bottom')
                @lang("Don't have account yet?") <a href="{{ route('register') }}" tabindex="-1">@lang("Register")</a>
            @endcomponent
        @endif
    @endcomponent
@endsection
