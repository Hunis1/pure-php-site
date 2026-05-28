<?php
require 'vendor/autoload.php';
use Smarty\Smarty;
$smarty = new Smarty();

// Включение кэширования.
$smarty->caching = true;
// Время жизни кеша в секундах (-1 - включает его навсегда).
$smarty->cache_lifetime = 0;

$data = require_once($_SERVER['DOCUMENT_ROOT'] . '/data/news-cats-data.php');
$smarty->assign(
    'cats_array', array_slice(json_decode($data),0,3)
);

// Отображаем темплейт главной страницы
$smarty->display('index.tpl');
?>