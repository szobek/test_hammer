<?php
function open($query,$arrayOfExec=null)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $result=null;
    try {

        $conn = new PDO("mysql:host=$servername;dbname=hammer", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare($query);
        $stmt->execute($arrayOfExec);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $result = $stmt->fetchAll();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    return $result;
}
