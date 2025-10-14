<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ai-Sen @yield('name')</title>
    <link rel="icon" type="image/png" href="img/logoWKM.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('layout.navigation')
    @yield('content')
    @include('layout.footer')
</body>
</html>