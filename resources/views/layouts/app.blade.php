<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body id="pg_in" class="">
<div id="wrapper" style="">
@include('.inc.header')
<!--main-->
    <div id="main" class="main-wrap">
        @yield('content')
    </div>
    <!--/main-->
</div>
@include('.inc.footer')
<div id="window_over" class="overlay" style="display: none;"></div>
</body>
</html>
