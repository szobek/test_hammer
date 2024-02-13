<?php

function getUserNameById(int $id):String{
    require_once "connectToDb.php";
    $result=open("SELECT `name` FROM users WHERE id=$id");
    return $result[0]["name"];
}
function loggingout(){
    session_destroy();
    header('Location: login.php');
}