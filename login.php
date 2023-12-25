<?php
$connect=mysqli_connect('localhost', 'root', 'root', 'diplom');
$name=$_POST['name'];
$parol=$_POST['parol'];
$result = mysqli_query($connect, "SELECT `login`, `parol`
  FROM `account` WHERE (`login` = '$name')AND(`parol`='$parol')");
  if(mysqli_num_rows($result) > 0) {
    setcookie("Вход", "$name", time()+10);
  }
header('Location:http://localhost/diplom/start.php');
?>
