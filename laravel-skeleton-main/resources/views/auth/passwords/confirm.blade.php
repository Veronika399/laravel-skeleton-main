@extends('layouts.app', ['atts' => 'd-flex flex-column'])

@section('content')
    @component('components.page.page-center-container')

        @component('components.form.form', ['action' => route('password.confirm'), 'title' => 'Confirm your password', 'submit' => 'Confirm my password', 'comment' => 'Please confirm your password before continuing to ensure the security of your account and protect your personal information.'])

            @component('components.form.form-input', ['title' => 'Password', 'name' => 'password', 'type' => 'password', 'placeholder' => 'Your password', 'attr' => 'autocomplete=off'])
                @slot('title')
                    @lang('Password')
                    <span class="form-label-description">
                        <a href="{{ route('password.request') }}">@lang('I forgot password')</a>
                    </span>
                @endslot

                @include('components.form.show-password')
            @endcomponent

        @endcomponent

    @endcomponent
@endsection
