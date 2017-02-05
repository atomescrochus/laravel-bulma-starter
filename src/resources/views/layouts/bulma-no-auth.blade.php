<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @stack('styles-before')
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    @stack('styles-after')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <!-- navigation -->
        <nav class="nav has-shadow">
          <div class="container">
            <div class="nav-left">
              <a class="nav-item" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
              </a>
            </div>
            <span class="nav-toggle">
              <span></span>
              <span></span>
              <span></span>
            </span>
            <div class="nav-right nav-menu">
                @stack('right-nav-menu')
            </div>
          </div>
        </nav>

        <!-- main content -->
        <section class="section">
            <div class="container">
                @yield('content')
            </div>
        </section>        
    </div>

    <!-- Scripts -->
    @stack('scripts-before')
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('scripts-after')
</body>
</html>
