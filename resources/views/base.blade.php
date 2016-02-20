<html>
    <head>
        <title>Digital Astronautics - @yield('title')</title>

        <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
        <script src="{{ URL::asset('js/all.js') }}"></script>
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