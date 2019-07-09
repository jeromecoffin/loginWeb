<?php
session_start();
if($_SESSION['isloged'] != "true"){
  header('Location: deconnexion.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bs431/css/bootstrap.min.css">
    <title>TP4</title>
  </head>
  <body>
  <h1>ADMIN</h1>
  <a href="deconnexion.php">Logout</a>
  </body>
</html>