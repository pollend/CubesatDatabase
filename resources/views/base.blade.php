


<html ng-app="app">
    <head>
        <base href="/">
        <title>Digital Astronautics - @yield('title')</title>

        <script src="{{ URL::asset('js/all.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
        <script src="{{ URL::asset('js/controllers/app.js') }}"></script>

        <script type="text/javascript">
            app.constant('API_URL', '{{url("/api/")}}');
        </script>
        @stack('script-head')
        @stack('css-head')

    </head>
    <body>
        @include('header')
        <div class="container" >
            @yield('content')
        </div>
        @include('footer')
        
    </body>
</html>