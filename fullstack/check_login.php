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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $query = "SELECT * FROM `users` WHERE `email`=? and `password`=?";
    try {

    $conn = new PDO("mysql:host=$servername;dbname=hammer", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare($query); 
   $stmt->execute([$req["username"],sha1($req["psw"]) ]); 
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $result = $stmt->fetchAll(); 

    if(count($result)>0){
        $_SESSION["logged"]=true;
header('Location: admin.php');
    }
    else  header('Location: login.php' , true);

    
    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
   // $conn->close(); 
    
    ?>
</body>

</html>