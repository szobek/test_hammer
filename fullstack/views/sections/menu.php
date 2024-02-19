
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/views/html/menu_start.php";
if (!isset($_SESSION)) session_start();
if (isset($_SESSION["logged"])) include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/menu_logged.php";
else include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/menu_not_logged.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/menu_end.php" ?>
       