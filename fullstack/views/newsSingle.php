<?php
    $news = null;
    include_once "../classes/class_news.php";

    if (isset($_REQUEST["id"])) {
        $id = $_REQUEST["id"];

        require_once "../connectToDb.php";

        $result = open("SELECT * FROM `news` WHERE `id`=?",[$id]);
        if (count($result) === 0) {
            echo "Nincs hír";
            die();
        } else {
            $news = $result[0];
        }
    } else {
        echo "Nincs id";
        exit;
    }

    include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/newsSingle_start.php";
           
        include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/newsSingle_content.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/newsSingle_end.php";