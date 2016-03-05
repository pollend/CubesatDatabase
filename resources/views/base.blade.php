


<html ng-app="app">
    <head>
        <base href="/">
        <title>Digital Astronautics - @yield('title')</title>

        <script src="{{ URL::asset('js/all.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
        <script src="{{ URL::asset('js/app.js') }}"></script>

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
        <footer class=" center_container">
            @include('footer')
        </footer>
        
    </body>
</html>