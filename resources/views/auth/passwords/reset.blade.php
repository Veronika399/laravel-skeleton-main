@extends('layouts.app', ['atts' => 'd-flex flex-column'])

@section('content')
    @component('components.page.page-center-container')

        @component('components.form.form', ['action' => route('password.update'), 'title' => 'Change password', 'submit' => 'Change password'])

            <input type="hidden" name="token" value="{{ $token }}">

            @include('components.form.form-input', ['title' => 'Email address', 'name' => 'email', 'type' => 'email', 'placeholder' => 'your@email.com'])

            @component('components.form.form-input', ['title' => 'Password', 'name' => 'password', 'type' => 'password', 'placeholder' => 'Your new password', 'attr' => 'autocomplete=off'])
                @include('components.form.show-password')
            @endcomponent

            @component('components.form.form-input', ['title' => 'Confirm password', 'name' => 'password_confirmation', 'type' => 'password', 'placeholder' => 'Your new password', 'attr' => 'autocomplete=off', 'errid' => 'password', 'show_error' => false])
                @include('components.form.show-password')
            @endcomponent

        @endcomponent

    @endcomponent
@endsection
