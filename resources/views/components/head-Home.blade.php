<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}"/>
    <link rel="icon" type="icon" class="w-full h-full object-cover" href="{{ asset('images/kemenag_icon.png') }}" />
    @vite('resources/css/app.css')
</head>
