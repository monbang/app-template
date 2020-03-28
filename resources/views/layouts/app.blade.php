<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', config('app.name'))</title>
    <script>
        window.App = @json([
            'csrfToken' => csrf_token(),
            'currentDate' => time(),
            'url' => url('/')
        ]);
    </script>
    <script src="{{ asset('static/manifest.js') }}" defer></script>
    <script src="{{ asset('static/vendor.js') }}" defer></script>
    <script src="{{ asset('static/app.js') }}" defer></script>
    <link href="{{ asset('static/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased font-sans text-gray-800 bg-gray-100">
    @yield('content')
</body>
</html>
