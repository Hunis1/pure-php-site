<?php
require 'vendor/autoload.php';
use Smarty\Smarty;
$smarty = new Smarty();

$mysqli = new mysqli('localhost','root','','pure-php.local');
if($mysqli->connect_error) {
    die('Отсуствует подключение к базам данных: ' . $mysqli->connect_error);
};

$catsQuery = $mysqli->prepare('SELECT * FROM news_cats WHERE id = (?)');
$catsQuery->bind_param('i',$_GET['id']);
$catsQuery->execute();
$categoryInfo = mysqli_fetch_assoc($catsQuery->get_result());
$categoryName = $categoryInfo['name'];

$news = [];
$postQuery = $mysqli->query('SELECT * FROM news WHERE JSON_CONTAINS(news_cats_id, "1")');
foreach($postQuery as $row) {
    array_push($news,$row);
};
$smarty->assign('news',$news);

$data = require_once($_SERVER['DOCUMENT_ROOT'] . '/data/news-cats-data.php');
$smarty->assign(
    'news_cats_array', json_decode($data)
);

$smarty->assign('h1', $categoryName);

$smarty->display('news-cat.tpl')
?>