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
    require_once "usercontroller.php";
    loggingout();
}


