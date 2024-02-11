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
    require_once "connect-to-db.php";

    $result = open("SELECT * FROM `users` WHERE `email`=? and `password`=?",[$req["username"], sha1($req["psw"])]);
    if(count($result)>0){
        $_SESSION["logged"]=true;
header('Location: admin.php');
    }
    else  header('Location: login.php' , true);

    
   
   // $conn->close(); 
    
    ?>
</body>

</html>