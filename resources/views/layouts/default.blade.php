<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Weibo')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('css')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Weibo App</a>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item"><a class="nav-link" href="/help">Help</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>s

</html>