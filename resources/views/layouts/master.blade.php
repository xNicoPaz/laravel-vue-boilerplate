<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Stream app</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body>
    <div id="app">
        <router-link to="/">Home</router-link>
        <router-link to="/about">Acerca de</router-link>

        <router-view></router-view>
    </div>

    <script src="{{url('js/app.js')}}"></script>
</body>
</html>
