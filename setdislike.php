<?php
$connect=mysqli_connect('localhost', 'root', 'root', 'diplom');
$vhod=$_COOKIE["Вход"];
$id=$_GET['id'];
$idAccount=mysqli_query($connect, "SELECT `id` from `account`
   where `login`='$vhod'");
   $idAccount = mysqli_fetch_all($idAccount);
   $idAcc=$idAccount[0][0];
 $resultLike=mysqli_query($connect, "SELECT `idMeropriyatiya`, `idAccount`
  FROM `likes` WHERE (`idMeropriyatiya`='$id')AND(`idAccount` = '$idAcc')");
  $resultDislike=mysqli_query($connect, "SELECT `idMeropriyatiya`, `idAccount`
   FROM `dislikes` WHERE (`idMeropriyatiya`='$id')AND(`idAccount` = '$idAcc')");
  if(mysqli_num_rows($resultDislike)>0) {
  mysqli_query($connect, "DELETE FROM `dislikes` WHERE
    (`idAccount` = '$idAcc')AND(`idMeropriyatiya`='$id')");
  } else if (mysqli_num_rows($resultLike)>0) {
    mysqli_query($connect, "INSERT INTO `dislikes` (`idMeropriyatiya`, `idAccount`, `id` )
    values ('$id', '$idAcc', NULL)");
    mysqli_query($connect, "DELETE FROM `likes` WHERE
      (`idAccount` = '$idAcc')AND(`idMeropriyatiya`='$id')");
  } else {
  mysqli_query($connect, "INSERT INTO `dislikes` (`idMeropriyatiya`, `idAccount`, `id` )
  values ('$id', '$idAcc', NULL)");}
$ssilka='Location:http://localhost/diplom/meropriyatiye.php?id='.$id;
header($ssilka);
?>
