<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();

    $req = $_REQUEST;
    require_once "connectToDb.php";

    $result = open("SELECT * FROM `users` WHERE `email`=? and `password`=?",[$req["username"], sha1($req["psw"])]);
    if(count($result)>0){
        $_SESSION["logged"]=true;
        $_SESSION["id"]=$result[0]["id"];
header('Location: admin.php');
    }
    else  header('Location: login.php' , true);

    
   
   // $conn->close(); 
    
    ?>
</body>

</html>