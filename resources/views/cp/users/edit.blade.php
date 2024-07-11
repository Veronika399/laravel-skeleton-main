@extends('layouts.app')

@section('content')
    @include('components.header')

    @if(session('message'))
        @include('components.alert', ['title' => session('message')])
    @endif

    @component('components.page.page-wrapper')

        @component('components.page.page-center-container', ["container" => "container-xl"])

            @component('components.form.edit-form', ['title' => ($data->id ? 'Updating' : 'Creating') . ' User Account', 'submit' => ($data->id ? 'Update' : 'Create')])
                <input type="hidden" name="id" value="{{ $data->id }}">

                @include('components.form.form-input', ['name' => 'name', 'value' => $data->name, 'placeholder' => 'Enter name'])
                @include('components.form.form-input', ['name' => 'email', 'type' => 'email', 'value' => $data->email, 'placeholder' => 'Enter email'])

                @component('components.form.form-input', ['name' => 'password', 'type' => 'password', 'attr' => 'autocomplete=off', 'placeholder' => 'Password'])
                    @include('components.form.show-password')
                @endcomponent

                @component('components.form.form-input', ['name' => 'password_confirmation', 'type' => 'password', 'attr' => 'autocomplete=off', 'errid' => 'password', 'show_error' => false, 'placeholder' => 'Password'])
                    @include('components.form.show-password')
                @endcomponent

            @endcomponent

        @endcomponent

    @endcomponent

    @include('components.footer')
@endsection
