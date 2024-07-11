@extends('layouts.app', ['atts' => 'd-flex flex-column'])

@section('content')

    @component('components.page.page-center-container')

        <div class="text-center">
            <div class="my-5">
                <h2 class="h1">@lang('Check your inbox')</h2>
                <p class="fs-h3 text-muted">
                    @lang('We have sent a confirmation to your email.')<br/>
                    @lang('Click the link to verify your address.')
                </p>
            </div>
            <div class="text-center text-muted mt-3">
                @lang("Don't see the email? Check your spam folder.")<br/>
                @lang('If you did not receive the email')
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline">@lang('Click here to resend')</button>
                </form>
            </div>
        </div>

    @endcomponent

@endsection
