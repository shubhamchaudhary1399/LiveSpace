<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
    @yield('header')
</head>
<body>
    <div id="app">
        @include('includes.navbar')
        @yield('content')
        @include('includes.footer')
    </div>
</body>
</html>
