
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="refresh" content="3;url=http://localhost/diplom/start.php" />
</head>
<body>
  <h1>Мероприятие успешно добавлено</h1>
  <?php
  $connect=mysqli_connect('localhost', 'root', 'root', 'diplom');
  $name=$_POST['name'];
  $opisaniye=$_POST['opisaniye'];
  $site=$_POST['site'];
  $idtipa=$_POST['idtipa'];
  $adres=$_POST['adres'];
  $date=$_POST['date'];
  $date=date('Y-m-d', strtotime($date));
  $path='img/'.$_FILES['path']['name'];
  mysqli_query( $connect, "INSERT INTO `meropriyatiya` (`id`, `name`, `opisaniye`, `site`, `idtipa`, `adres`, `path`)
  VALUES (NULL, '$name', '$opisaniye', '$site', '$idtipa', '$adres', '$path');");
  $id=mysqli_query( $connect, "SELECT MAX(`id`) FROM `meropriyatiya`");
  $id = mysqli_fetch_all($id);
  $id1=$id[0][0];
  mysqli_query( $connect, "INSERT INTO `dates` (`id`, `idMeropriyatiya`, `date`)
  VALUES (NULL, '$id1', '$date');");
  ?>
</body>
</html>
