<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VanRota</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://kit.fontawesome.com/4ecb736ddb.js" crossorigin="anonymous"></script>

</head>
<body>
    <div id="page-login">
        <div class="fundo"></div>
        <div class="container-form">
            @livewire('login-form', ['tipo' => $tipo])
        </div>
    </div>
</body>
</html>
