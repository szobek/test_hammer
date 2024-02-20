<?php

if (!isset($_SESSION)) session_start();
if (!isset($_SESSION["logged"])) header('Location: login.php');



if (isset($result) && $result != null) {
    $news = $result[0];
    $title = "Update | " . $news["title"];
    $action = "newscontroller.php?function=saveAfterEdit&id=" . $news["id"];
} else {
    $news = [];
    $news["id"] = "";
    $news["title"] = "";
    $news["news_desc"] = "";
    $news["content"] = "";
    $news['image_url'] = "";
    $title = "Create news";
    $action = "newscontroller.php?function=createNews";
}
include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/createAndUpdate_start.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/views/sections/menu.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/createAndUpdate_form.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/createAndUpdate_end.php";
