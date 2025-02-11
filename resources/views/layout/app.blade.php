<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('partials.header')
    <main>
        @yield('contactsection')
        @yield('boardsection')
        @yield('blogsection')
        @yield('homehero')
        @yield('homepricing')
        @yield('homecta')
        @yield('aboutsection')
    </main>
    @include('partials.footer')
</body>
</html>