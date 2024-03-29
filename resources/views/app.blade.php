<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SMART HIRE</title>
         <!-- Favicons -->
        <link rel="icon" href="{{ asset('storage/images/logo/lnu_logo.png') }}" type="image/gif" alt="LNU Logo" nonce="{{ csp_nonce() }}">
        @vite(['resources/css/app.css'])
        @vite(['resources/js/app.js'])
    </head>
    <body>
        
        <div id="app">
            <router-view></router-view>
        </div>
    </body>
</html>