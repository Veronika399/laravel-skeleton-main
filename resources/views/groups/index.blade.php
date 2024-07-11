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
            <h2>Grupe</h2>
            <a href="{{ route('groups.create') }}" class="btn btn-primary">Kreiraj novu grupu</a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime</th>
                        <th>Aktivno</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($groups as $group)
                        <tr>
                            <td>{{ $group->id }}</td>
                            <td>{{ $group->name }}</td>
                            <td>{{ $group->active ? 'DA' : 'NE' }}</td>
                            <td>
                                <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-secondary">Uredi</a>
                            <form action="{{ route('groups.destroy', $group->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Želite li stvarno izbrisati grupu?');">Izbriši</button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



    @include('components.footer')
@endsection


