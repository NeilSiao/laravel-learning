<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
        <script src="{{ asset('js/app.js')}}"></script>
        
        <title>{{ config('app.name', 'neilcraft')  }}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.message')
            @yield('content')
        </div>

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
</html>
