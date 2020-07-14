<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Weibo')</title>
    <link rel="stylesheet" href="/css/app.css">
    @yield('css')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div>
        </div>
    </nav>

    @yield('content')
    @yield('js')
</body>

</html>