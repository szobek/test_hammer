<?php
session_start();
if(isset($_SESSION["logged"])){
    header('Location: admin.php' , true);
   die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Login</title>
    <?php include "sections/header.php"; ?>
    <link rel="stylesheet" href="../css/login.css">
    
</head>
<body>


<div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="/controllers/usercontroller.php?function=checklogin">
      <input type="text" name="username" value="kn@test.hu" placeholder="username"/>
      <input type="password" name="psw" value="tttttt" placeholder="password"/>
      <button>login</button>
    </form>
    <a href="/views/newsList.php">Open news list without login</a>
  </div>
</div>

</body>
</html>
