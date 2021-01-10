<!DOCTYPE html>
<html lang="en_GB">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatiable" content="ie=edge" />

    <title>@yield('title') - Webshop</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/material.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="mdc-typography flex h-full w-full">
    <nav class="bg-gray-800 fixed w-18 h-full">
        <ul class="flex justify-center">
            <li class="flex justify-center items-center h-18 w-full">
                <a href="#" class="p-2">
                    <i class="material-icons text-navicon hover:text-yellow-400 transition-colors">inventory_2</i>
                </a>
            </li>
        </ul>
    </nav>
    <div class="ml-18 px-8 w-full">
        @yield('main')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
