@php
    $page = __("Home")
@endphp
@extends('layouts.app', ['title_suffix' => $page])

@section('content')
    @include('components.header')

    @component('components.page.page-wrapper')
    <br>
        {{-- @include('components.page.page-title', ['title' => $page]) --}}
       
        <br>
    <div class="container">
        <h2>Uredi grupu</h2>
        <form action="{{ route('groups.update', $group->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Ime</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $group->name }}">
            </div>
            <br>
            <div class="form-group">
                <label for="description">Opis</label>
                <textarea class="form-control" id="description" name="description">{{ $group->description }}</textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="active">Aktivno<name="active" value="0">
                <input type="checkbox" id="active" name="active" value="1" {{ $group->active ? 'checked' : '' }}>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Spremi</button>
        </form>
    </div>



@include('components.footer')
@endsection
