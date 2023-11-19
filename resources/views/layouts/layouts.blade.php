<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/ui.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Kiwi+Maru:wght@500&display=swap" rel="stylesheet">
    <title>ToDolist</title>
</head>
<body>
    <header>
        <div class="uk-section uk-padding-remove">
            <h1><img id="headerpic" src="../image/anything2.jpg" alt="トップ画像"></h1>
        </div>
    </header>
    <section>
        <div class="uk-container uk-section uk-paddin-small">
        @yield('contents')
        </div>
    </section>
    <footer>
        <div class="uk-container uk-section uk-paddin-small"">
            <p>2023 skmt</p>
        </div>
    </footer>
</body>
<script src="../js/ui.js"></script>
<script src="../js/uimin.js"></script>
</html>