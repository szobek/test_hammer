<?php
session_start();
if (!isset($_SESSION["logged"])) header('Location: login.php');
include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/admin_start.php";
include "sections/menu.php";
require_once "../connectToDb.php";

$result = open("SELECT * FROM `news`");
if (count($result) === 0) include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/admin_no_news.php";

include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/admin_new_list.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/admin_end.php";
