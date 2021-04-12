<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <title>BCbeatz</title>
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name', 'bcbeatz')}}</title>

        <!-- Scripts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('js/scripts.js') }}" rel="stylesheet">
        <!-- icon -->
        
    </head>
    <body class="bg-gradient-to-r from-yellow-500 via-red-500 to-pink-500 font-sans">
            @include('inc.nav')
            @yield('content')
    </body>
</html>
