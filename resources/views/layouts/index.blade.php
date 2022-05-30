<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @yield('style')
</head>
<body>
        <div class="container">
            @yield('content')
        </div>
            @yield('script')
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>