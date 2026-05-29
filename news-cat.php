<?php
require 'vendor/autoload.php';
use Smarty\Smarty;
$smarty = new Smarty();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$mysqli = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);

$catsQuery = $mysqli->query('SELECT * FROM news_cats WHERE id = "'. $_GET['id'] .'"');
$categoryInfo = mysqli_fetch_assoc($catsQuery);

if(!empty($_POST['sort'])) {
    $sortType = ($_POST['sort']);
    $smarty->assign('selected',$sortType);
}

$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$postsPerPage = 4;
$offset = ($currentPage - 1) * $postsPerPage;
$news = [];
if(!empty($sortType) && $sortType === 'by-views') {
    $postQuery = $mysqli->query('SELECT * FROM news WHERE JSON_CONTAINS(news_cats_id,"'.$categoryInfo['id'].'") ORDER BY views_count DESC LIMIT '.$offset.','.$postsPerPage.'');
} else {
    $postQuery = $mysqli->query('SELECT * FROM news WHERE JSON_CONTAINS(news_cats_id,"'.$categoryInfo['id'].'") ORDER BY published DESC LIMIT '.$offset.','.$postsPerPage.'');
}
foreach($postQuery as $row) {
    array_push($news,$row);
};

$countNews = mysqli_fetch_assoc($mysqli->query('SELECT COUNT(*) AS count FROM news WHERE JSON_CONTAINS(news_cats_id,"'.$categoryInfo['id'].'")'))['count'];
$countPages = ceil($countNews / $postsPerPage);
if($countPages >= 1) {
    $pagination = [];
    for($i = 1; $i <= $countPages; $i++){
        array_push($pagination,$i);
    }
    $smarty->assign('pagination', $pagination);
}

$smarty->assign('news',$news);
$smarty->assign('h1', $categoryInfo['name']);
$smarty->assign('cat_desc',$categoryInfo['description']);
$smarty->assign('cat_id',$categoryInfo['id']);
$smarty->display('news-cat.tpl');
?>