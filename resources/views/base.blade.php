

<html ng-app="app">
    <head>
        <base href="/">
        <title>Digital Astronautics - @yield('title')</title>

        <script src="{{ URL::asset('js/all.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">

        @stack('script-head')
        @stack('css-head')

    </head>
    <body>
        <div class="Wrapper" >
            @include('header')

            <div class="Page" class="center_container">

                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer class="Footer" class="center_container">
            @include('footer')
        </footer>
        
    </body>
</html>