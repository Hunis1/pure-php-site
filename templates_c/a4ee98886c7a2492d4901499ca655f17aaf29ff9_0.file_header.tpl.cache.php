<?php
/* Smarty version 5.8.0, created on 2026-05-27 12:37:59
  from 'file:header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a16bb77ad0a78_71562449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4ee98886c7a2492d4901499ca655f17aaf29ff9' => 
    array (
      0 => 'header.tpl',
      1 => 1779874672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a16bb77ad0a78_71562449 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\OSPanel\\domains\\pure-php.local\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '8494359596a16bb77aa6171_08802806';
?>
<!doctype html>
<html>
    <head>
        <title>Сайт на чистом PHP</title>
        <meta charset="<?php echo '<?php'; ?>
 bloginfo( 'charset' ); <?php echo '?>'; ?>
">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../assets/style.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <style>
            body {
                --bg-main: #6801683b;
                --bg-second: <?php echo '<?'; ?>
=$bgSec<?php echo '?>'; ?>
;
                --bg-third: <?php echo '<?'; ?>
=$stroke<?php echo '?>'; ?>
;
                --primary-main: #680168;
                --primary-second: #ffc107;
                --text-main: #0f0f0f;
                --text-second: #353535;
                --stroke-main: <?php echo '<?'; ?>
=$hover<?php echo '?>'; ?>
;
                --stroke-second: <?php echo '<?'; ?>
=$second<?php echo '?>'; ?>
;
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
        </header><?php }
}
