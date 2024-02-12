<?php
session_start();
switch ($_REQUEST["function"]) {
    case "logout":
        logout();
        break;
        
    default:
        null;
}
