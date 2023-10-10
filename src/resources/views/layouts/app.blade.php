<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gorditas&family=Indie+Flower&family=Noto+Sans+JP:wght@400;500&family=Noto+Serif+JP:wght@900&family=Playfair+Display:wght@800&display=swap" rel="stylesheet">
    
    <title>Attendance Management</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__title">
                <a class="header__logo" href="/">
                    Atte
                </a>
            </div>
        @yield('header')
        </div>
    </header>

    <main class="content">
        @yield('content')
    </main>

    <footer class="footer">
        <small class="footer__inner">
            Atte,inc.
        </small>
    </footer>
</body>
</html>