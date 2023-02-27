<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VanRota</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://kit.fontawesome.com/4ecb736ddb.js" crossorigin="anonymous"></script>
    @livewireStyles()
</head>
<body>
    <div id="page-login">
        @livewire('login-form')
    </div>
    @livewireScripts()
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
