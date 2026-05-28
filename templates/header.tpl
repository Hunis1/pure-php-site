<!doctype html>
<html>
    <head>
        <title>Сайт на чистом PHP</title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../assets/style.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <style>
            body {
                --bg-main: #6801683b;
                --bg-second: <?=$bgSec?>;
                --bg-third: <?=$stroke?>;
                --primary-main: #680168;
                --primary-second: #ffc107;
                --text-main: #0f0f0f;
                --text-second: #353535;
                --stroke-main: <?=$hover?>;
                --stroke-second: <?=$second?>;
                --white: #fff;
                --font-family: "Mulish", sans-serif;
                --second-family: "Inter", sans-serif;
                --third-family: "Raleway", sans-serif;
            }
        </style>
    </head>
    <body>
        <header id="header">
            <div class="container">
                <div class="header-wrapper">
                    <a href="/" class="header-wrapper__title">SiteTitle</a>
                    <div class="menu">
                        <a href="/archive-news.php">Статьи</a>
                    </div>
                    <div class="btn">Кнопка</div>
                </div>
            </div>
        </header>