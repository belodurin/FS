<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Автоматизация технологических процессов')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>
<body>
    @include('pages.hed')

    <main>
        @yield('content')
    </main>

    @include('pages.footer')
</body>
</html>
