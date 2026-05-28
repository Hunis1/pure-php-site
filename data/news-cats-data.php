<?php
    $mysqli = new mysqli('localhost','root','','pure-php.local');
    if($mysqli->connect_error) {
        die('Отсуствует подключение к базам данных: ' . $mysqli->connect_error);
    };
    $query = $mysqli->query('SELECT * FROM news_cats');
    $mysqli->close();

    $data = [];
    foreach($query as $d) {
        array_push($data,$d);
    };
    $jsonData = json_encode($data);
    return($jsonData)
?>