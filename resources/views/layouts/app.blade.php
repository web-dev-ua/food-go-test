<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=no">
    <title>Test App</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="columns" id="app">
    @yield('main')
</div>

<script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
