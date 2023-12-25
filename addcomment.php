<?php
$connect=mysqli_connect('localhost', 'root', 'root', 'diplom');
$vhod=$_COOKIE["Вход"];
$id=$_POST['id'];
$textComment=$_POST['textComment'];
$idAccount=mysqli_query($connect, "SELECT `id` from `account`
   where `login`='$vhod'");
   $idAccount = mysqli_fetch_all($idAccount);
   $idAcc=$idAccount[0][0];
   $datetime=date('Y-m-d H:m:s');
  mysqli_query($connect, "INSERT INTO `comments` (`idMeropriyatiya`, `idAccount`, `id`, `date`, `comment` )
  values ('$id', '$idAcc', NULL, '$datetime', '$textComment')");
$ssilka='Location:http://localhost/diplom/meropriyatiye.php?id='.$id;
header($ssilka);
?>
