<?php
require 'vendor/autoload.php';
use Smarty\Smarty;
$smarty = new Smarty();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$mysqli = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);

$query = $mysqli->query('SELECT * FROM news_cats');
$categories = [];
foreach($query as $item) {
    $item['posts'] = [];
    $postsQuery = $mysqli->query('SELECT * FROM news WHERE JSON_CONTAINS(news_cats_id,"' . $item['id'] . '") ORDER BY published DESC LIMIT 3');
    foreach($postsQuery as $row) {
        array_push($item['posts'],$row);
    }
    array_push($categories,$item);
}

$smarty->assign('news_cats_array', $categories);
$smarty->display('archive-news.tpl')
?>