<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cagnolini Patriottici</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <script type="text/javascript" src="/js/app.js">
        </script>

    </head>
    <body>
        @include('header')

        <main>
          @yield('section')
        </main>

        @include('footer')
    </body>
</html>
