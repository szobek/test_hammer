<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Login</title>
    <?php include "sections/header.php"; ?>
    <link rel="stylesheet" href="../css/login.css">
    
</head>
<body>

<?php
session_start();
if(isset($_SESSION["logged"])){
    header('Location: admin.php' , true);
   die();
}
?>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="/controllers/setUser.php?function=checklogin">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="psw" placeholder="password"/>
      <button>login</button>
    </form>
    <a href="/views/newsList.php">Open news list without login</a>
  </div>
</div>

</body>
</html>