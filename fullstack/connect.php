
<?php


function viewOneNews(){
    
    
$response = new News("Teszt hír","2022-02-22","szobek","desription","A teljes hír","image");
//echo $response->obj_to_json();
searchNewsFromRequestById();
}

$dbServerName = "77.111.114.148";
$dbUsername = "c3_test003";
$dbPassword = "7#MpUarZ";
$dbName = "c3_test003";
viewOneNews();
// create connection
//$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
/* if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; */
?>