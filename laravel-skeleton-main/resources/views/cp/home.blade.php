@php
    $page = __("Home")
@endphp
@extends('layouts.app', ['title_suffix' => $page])

@section('content')
    @include('components.header')

    @component('components.page.page-wrapper')
        @include('components.page.page-title', ['title' => $page])
        <a href="{{ route('groups.index') }}" class="btn btn-primary" style="background-color: #blue; color: white; height: 50px; width:180px; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 60px 120px; cursor: pointer; border-radius: 12px;">Vidi grupe</a>
    @endcomponent

    @include('components.footer')
@endsection
