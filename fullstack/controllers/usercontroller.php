<?php

class setUser
{
    private String $url;

    public function __construct()
    {
        if (!isset($_SESSION)) session_start();
        if (isset($_REQUEST["function"])) {

            $this->url = $_REQUEST["function"];

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
    static function getUserNameById(int $id): String
    {
        require_once "../connectToDb.php";
        $result = open("SELECT `name` FROM users WHERE id=?", [$id]);
        if(isset($result[0])) return $result[0]["name"];
        else return "";
    }
    function logout()
    {
        session_destroy();
        header('Location: /views/login.php');
    }
}

new setUser();
