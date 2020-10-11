<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Font Awesome-->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Noto+Serif+JP&family=PT+Serif&family=Sora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--main.css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?v=2" type="text/css" />
    <!-- animation.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!--Vue.js-->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>


    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <!--ヘッダー-->
    <header class="d-none d-md-block">
        <div class="container">
            <div class="row d-none d-md-flex">
                <h2 class="col-md-3">portfolio</h2>
                <ul class="col-md-7 offset-md-2 d-flex justify-content-md-between">
                    <li class="skip_top">top</li>
                    <li class="skip_about">about</li>
                    <li class="skip_skill">skill</li>
                    <li class="skip_works">works</li>
                    <li class="skip_contact">contact</li>
                </ul>
            </div>
        </div>
    </header>

    <!--ナビゲーションメニュー-->
    <div class="navi_menu d-block d-md-none">
        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
        <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner diagonal part-1"></div>
            <div class="spinner horizontal"></div>
            <div class="spinner diagonal part-2"></div>
        </label>
    </div>

    <!-- スライドメニュー部分-->
    <nav id="slide_menu">
        <ul>
            <li class="skip_top">top</li>
            <li class="skip_about">about</li>
            <li class="skip_skill">skill</li>
            <li class="skip_works">works</li>
            <li class="skip_contact">contact</li>
        </ul>
    </nav>

    <!--ヒーローイメージ-->
    <div class="hero">
        <div>
            <h1>Welcome to my portfolio!!</h1>
        </div>
    </div>