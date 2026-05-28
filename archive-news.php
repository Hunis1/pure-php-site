<?php
require 'vendor/autoload.php';
use Smarty\Smarty;
$smarty = new Smarty();

$data = require_once($_SERVER['DOCUMENT_ROOT'] . '/data/news-cats-data.php');
$smarty->assign(
    'news_cats_array', json_decode($data)
);

$smarty->display('archive-news.tpl')
?>