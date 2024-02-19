<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/admin_news_list_start.php";
foreach ($result as $elem) include $_SERVER['DOCUMENT_ROOT'] . "/views/html/admin_news_list_row.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/views/html/admin_new_list_end.php";