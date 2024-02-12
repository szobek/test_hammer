<?php

function getUserNameById(int $id):String{
    require_once "connect-to-db.php";
    $result=open("SELECT `name` FROM users WHERE id=$id");
    return $result[0]["name"];
}
function logout(){
    session_destroy();
    header('Location: login.php');
}