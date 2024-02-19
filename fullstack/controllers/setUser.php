<?php

class User
{
    private String $url;

    public function __construct()
    {
        session_start();
        $this->url=$_REQUEST["function"];

        switch ($this->url) {
            case "logout":
                $this->logout();
                break;
            case "checklogin":
                $this->checkLogin();
                break;
            default:
                null;
        }
    }


    function logout()
    {
        require_once "usercontroller.php";
        loggingout();
    }
    function checkLogin()
    {

        $req = $_REQUEST;
        require_once "../connectToDb.php";

        $result = open("SELECT * FROM `users` WHERE `email`=? and `password`=?", [$req["username"], sha1($req["psw"])]);
        if (count($result) > 0) {
            $_SESSION["logged"] = true;
            $_SESSION["id"] = $result[0]["id"];
            header('Location: /views/admin.php');
        } else  header('Location: /views/login.php', true);
    }
}

new User();
