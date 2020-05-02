<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Testing</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <main class="main" id="main">
            <section class="content">
                <div class="content__inner" id="main">
                    @yield('content')
                </div>
            </section>
        </main>
    </body>

    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scripts')
</html>
