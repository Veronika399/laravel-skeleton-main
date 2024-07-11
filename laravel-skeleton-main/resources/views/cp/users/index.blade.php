@php
    $page = __("User Accounts")
@endphp
@extends('layouts.app', ['title_suffix' => $page])

@section('content')
    @include('components.header')

    @component('components.page.page-wrapper')

        @component('components.card.card')
            @component('components.card.card-title', ['title' => $page])
                @include('components.card.card-right-link', ['url' => route('users.edit'), 'title' => 'New User Account'])
            @endcomponent

            @component('components.card.card-body')
                @include('components.search.user-search')
            @endcomponent

            @component('components.table')
                <thead>
                    <tr>
                        <th class="text-center w-1">@lang('Id')</th>
                        <th>@lang('Name')</th>
                        <th>@lang('Email')</th>
                        <th class="text-center w-1">@lang('Edit')</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td class="text-center">{{ $row->id }}</td>
                        <td><a href="{{ route('users.edit', ['id' => $row->id]) }}">{{ $row->name }}</a></td>
                        <td>{{ $row->email }}</td>
                        <td class="text-center">
                            <a class="ti ti-edit" href="{{ route('users.edit', ['id' => $row->id]) }}"></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            @endcomponent

            {{ $data->onEachSide(1)->links('pagination.card-footer') }}
        @endcomponent

{{--        {{ $data->onEachSide(1)->links('pagination.default') }}--}}

    @endcomponent

    @include('components.footer')
@endsection
