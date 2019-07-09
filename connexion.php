<?php
session_start();
$login = (isset($_POST['login'])) ? $_POST['login'] : '' ;
$pass = (isset($_POST['pass'])) ? $_POST['pass'] : '' ;
$bdd = new PDO('mysql:host=localhost;dbname=myapp;charset=utf8', 'root', 'root');

$sql = "SELECT COUNT(*) AS nbr FROM `user` WHERE 
`usr_login` = 'jerome.coffin' AND
`usr_pass` = 'winner' AND
`usr_status` = 0;";

$res = $bdd->query($sql);
$data = $res->fetch();


if($data['nbr'] == 1){

  $_SESSION['isloged'] = "true";
  header('Location: admin.php');
}
else {

  header('Location: index.php');
}

?>