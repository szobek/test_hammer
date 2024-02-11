<?php
 require_once "connect-to-db.php";
switch ($_REQUEST["function"]) {
    case "delete":
        deleteNews($_REQUEST["id"]);
        break;
    case "update":
        updateNewsView($_REQUEST["id"]);
        break;
        case "saveAfterEdit":
            updateNews($_REQUEST["id"]);
            break;
            case "createNewsView":
                createView();
                break;
    default:
        null;
}

function deleteNews(int $id)
{
    $success = false;

    $result = open("DELETE FROM `news` WHERE `id`=$id");
    $success = ($result > 0) ? true : false;
    if ($success) {
        header('Location: admin.php');
    } else {
        echo "Hiba törlés közben";
    }
}

function updateNewsView(int $id)
{
    $result = open("SELECT * FROM `news` WHERE `id`=$id");
    
    include "createAndUpdate.php";
}

function updateNews(int $id){
    $title=$_REQUEST["title"];
    $desc=$_REQUEST["desc"];
    $content=$_REQUEST["content"];

    open("UPDATE `news` SET title='$title',content='$content',news_desc='$desc' WHERE `id`=$id");
    header('Location: admin.php');

}

function createView(){
    include "createAndUpdate.php";    
}
