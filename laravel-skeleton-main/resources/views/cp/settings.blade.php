@extends('layouts.app', ['title_suffix' => __("Settings")])

@section('content')
    @include('components.header')

    @component('components.page.page-wrapper')

        @if(session('message'))
            @include('components.alert', ['title' => session('message')])
        @endif

        @component('components.card.card')
            @include('components.tabs.header', ['tabs' => ['general' => 'General', 'terminal' => 'Terminal']])

            @component('components.tabs.body')

                @component('components.tabs.pane', ['id' => 'general', 'active' => true])
                    <form method="POST">
                        @csrf

                        @foreach ($data as $row)
                            @include('components.form.form-input-row', ['title' => __("setting.$row->data_key"), 'name' => $row->data_key, 'type' => $row->data_type, 'value' => $row->data_value ?? ''])
                        @endforeach

                        @include('components.form.submit-button', ['title' => 'Submit', 'primary' => true])
                    </form>
                @endcomponent

                @component('components.tabs.pane', ['id' => 'terminal'])
                    <form action="/ax/execute" method="POST" id="terminal-form">
                        @csrf
                        <p class="mb-2">Cheatsheet</p>
                        <pre># Use default php version<br>php artisan<br><br># Use custom php version (cPanel)<br>/usr/local/bin/ea-php99 artisan</pre>

                        <input type="text" name="command" id="command" class="form-control" placeholder="Run a command">
                        <pre class="mt-3 m-0" id="terminal-output"></pre>
                    </form>
                    <script type="module">
                        const terminalOutput = $('#terminal-output');

                        $('#terminal-form').on('submit', function(e) {
                            e.preventDefault();
                            terminalOutput.text('');
                            $.ajax({
                                type: 'POST',
                                url: '/ax/execute',
                                data: $(this).serialize(),
                                success: function(data) {
                                    terminalOutput.text(data);
                                }
                            })
                        })
                    </script>
                @endcomponent

            @endcomponent
        @endcomponent

    @endcomponent

    @include('components.footer')
@endsection
