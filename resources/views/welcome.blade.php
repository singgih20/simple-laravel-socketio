<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel Broadcast Redis Socket io Tutorial - ItSolutionStuff.com</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Laravel Broadcast Redis Socket io Tutorial - ItSolutionStuff.com</h1>

            <div id="notification"></div>
            <div id="users"></div>

        </div>
    </body>

    <script>
            window.laravel_echo_port='{{env("LARAVEL_ECHO_PORT")}}';
    </script>
    <script src="//localhost:{{env('LARAVEL_ECHO_PORT')}}/socket.io/socket.io.js"></script>
    {{-- 6001 --}}
    <script src="{{ url('/js/laravel-echo-setup.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        var i = 0;
        window.Echo.channel('user-channel')
         .listen('.UserEvent', (data) => {
            i++;
            $("#users").append(`
                <li>
                    <ul> ${data.data.data.name} </ul>
                    <ul> ${data.data.data.email} </ul>
                </li>
            `)
            console.log(data.data.data.name)
        });

        var users = {!! json_encode($users->toArray()) !!}
        users.map((e) => {
            $("#users").append(`
                <li>
                    <ul> ${e.name} </ul>
                    <ul> ${e.email} </ul>
                </li>
            `)
        })
    </script>
</html>
