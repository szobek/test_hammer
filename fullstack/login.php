<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Login</title>
    <?php include "header.php"; ?>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
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
    <form class="login-form" method="post" action="check_login.php">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="psw" placeholder="password"/>
      <button>login</button>
    </form>
  </div>
</div>

</body>
</html>
