<?php
session_start();
switch ($_REQUEST["function"]) {
    case "logout":
        logout();
        break;
    default:
        null;
}

function logout(){
    session_destroy();
    header('Location: login.php');
}