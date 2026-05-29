<?php
require 'vendor/autoload.php';
use Smarty\Smarty;
$smarty = new Smarty();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$mysqli = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);

$postInfo = $mysqli->query('SELECT * FROM news WHERE post_id = '.$_GET['id'].'');
$postContent = mysqli_fetch_assoc($postInfo);
$postDate = date("d-m-Y", strtotime($postContent['published']));

$similars = $mysqli->query('SELECT * FROM news WHERE NOT post_id = "'.$postContent['post_id'].'" LIMIT 3');

if (isset($_POST['upload'])) {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/' . $filename;
    $images = $mysqli->query('INSERT INTO images (name) VALUES ("'. $filename .'")');
    move_uploaded_file($tempname, $folder);
}


$smarty->assign('h1', $postContent['name']);
$smarty->assign('image','/assets/images/' . $postContent['image_name']);
$smarty->assign('description', $postContent['description']);
$smarty->assign('text', $postContent['news_text']);
$smarty->assign('views', $postContent['views_count']);
$smarty->assign('date', $postDate);
$smarty->assign('similars',$similars);
$smarty->display('single-news.tpl')
?>