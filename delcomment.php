
<?php
$connect=mysqli_connect('localhost', 'root', 'root', 'diplom');
$id=$_GET['id'];
$account=$_COOKIE['Вход'];
$result=mysqli_query( $connect, "SELECT `id` from `account` where `login`='$account'");
$result=mysqli_fetch_all($result);
$account2=$result[0][0];
mysqli_query( $connect, "DELETE FROM `comments` WHERE (`idAccount`='$account2')AND(`idMeropriyatiya`='$id')");
$ssilka='Location:http://localhost/diplom/meropriyatiye.php?id='.$id;
header($ssilka);
 ?>
