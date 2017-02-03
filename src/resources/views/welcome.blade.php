<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Styles -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <section class="hero is-fullheight">
            <!-- Hero header: will stick at the top -->
            <div class="hero-head">
                <header class="nav">
                    <div class="container">
                        <span class="nav-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <div class="nav-right nav-menu">
                            @if (Auth::check())
                                <a class="nav-item" href="{{ url('/home') }}">Home</a>
                            @else
                                <a class="nav-item" href="{{ url('/login') }}">Login</a>
                                <a class="nav-item" href="{{ url('/register') }}">Register</a>
                            @endif
                        </div>
                    </div>
                </header>
            </div>
            <!-- Hero content: will be in the middle -->
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                    Laravel
                    </h1>
                    <h2 class="subtitle">
                        <nav class="tabs is-fullwidth">
                        <div class="container">
                            <ul>
                                <li><a href="https://laravel.com/docs">Laravel Documentation</a></li>
                                <li><a href="http://bulma.io/documentation/overview/start/">Bulma Documentation</a></li>
                                <li><a href="https://laracasts.com">Laracasts</a></li>
                                <li><a href="https://laravel-news.com">News</a></li>
                                <li><a href="https://forge.laravel.com">Forge</a></li>
                                <li><a href="https://github.com/laravel/laravel">GitHub</a></li>
                                <li><a>Layout</a></li>
                            </ul>
                        </div>
                    </nav>
                    </h2>
                </div>
            </div>
        </section>
    </body>
</html>