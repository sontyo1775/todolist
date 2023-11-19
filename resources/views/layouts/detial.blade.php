<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/ui.css">
    <title>Detiallist</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Kiwi+Maru:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="uk-container uk-section">
            <ul class="uk-nav-default" uk-nav>
                <li class="uk-parent">
                    <a href="#">ナビゲーション</a>
                    <ul class="uk-nav-sub">
                        <li><a href="{{route('favo')}}">ほしい物リスト</a></li>
                        <li><a href="{{route('seasoning')}}">調味料管理</a></li>
                        <li><a href="{{route('memo')}}">メモ帳</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <section>
        <div class="uk-container uk-section">
        @yield('contents')
        </div>
    </section>
    <footer>
        <div class="uk-container uk-section">
            <div id="returnhome">
                <a href="{{route('index')}}"">
                   <img id="home" src="../image/back.jpg">
                   <p>戻る</p>
                </a>
            </div>
            <p>2023 skmt</p>
        </div>
    </footer>
</body>
<script src="../js/ui.js"></script>
<script src="../js/uimin.js"></script>
</html>