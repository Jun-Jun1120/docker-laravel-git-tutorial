<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Git入門')</title>
    <!-- Js -->
    @vite('resources/js/app.js')
    <!-- Css -->
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('css/git-commands.css') }}" rel="stylesheet">
    <link href="{{ asset('css/search-bar.css') }}" rel="stylesheet" >

</head>

<body>
<header>
    <div class="header-content">
        <h1>Git入門へようこそ</h1>
        <img src="/images/GitHub icon.png" alt="GitHub Icon" class="github-icon">
        @include('partials.auth-links')
    </div>
    @include('partials.navigation')
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    <p>© 2024 Git入門サイト</p>
</footer>
</body>
</html>
