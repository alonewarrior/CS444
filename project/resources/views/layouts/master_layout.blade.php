<html>
    <head>
        @include('javascript.js')
        @include('css.styles')
        <title>Test - @yield('title')</title>
    </head>
    <body>
        @yield('main_content')
    </body>
</html>