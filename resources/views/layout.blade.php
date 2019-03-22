<!DOCTYPE html>
<html>

<head>

    <title>@yield('title')</title>
</head>

<body>


    <ul>
        <li><a href="/contact">Contact Us to learn more!</a></li>
        <li><a href="/about">About Us!</a></li>
        <li><a href="/">Home</a></li>
    </ul>

    @yield('content')
</body>

</html>