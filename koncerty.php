
<!DOCTYPE html>
<html>
<head>
<?php
$connect=mysqli_connect('localhost', 'root', 'root', 'diplom');
?>
<style>body {
  margin: 0;
  font-family: Arial;
   background: #f1f1f1;
}
/* left column */
.leftcolumn {
    float: left;
    width: 75%;
}
.card {
     background-color: white;
     padding: 20px;
     margin-top: 20px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

</style>
</head>
<body>

<div class="topnav">
  <a  href="http://localhost/diplom/start.php">Главная</a>
  <a  href="http://localhost/diplom/exkursii.php">Экскурсии</a>
  <a href="http://localhost/diplom/kino.php">Кино</a>
  <a class="active" href="http://localhost/diplom/koncerty.php">Концерты</a>
  <a   href="http://localhost/diplom/teatr.php">Театр</a>
  <a href="http://localhost/diplom/detyam.php">Детям</a>
  <a href="http://localhost/diplom/festivali.php">Фестивали</a>
  <a href="http://localhost/diplom/sport.php">Спорт</a>
  <a href="http://localhost/diplom/nauka.php">Наука</a>
  <a href="http://localhost/diplom/eda.php">Еда</a>
  <a href="http://localhost/diplom/blagotvoritelnost.php">Благотворительность</a>
  <div class="topnav-right">
    <a href="#contact">Найти</a>
    <a onclick="document.getElementById('id01').style.display='block'">Зарегистрироваться</a>
  </div>
</div>

<div style="padding-left:16px">
  <h2>Мероприятия</h2>
</div>
<?php
           $meropriyatiya = mysqli_query( $connect, "SELECT `meropriyatiya`.`name`, `opisaniye`, `adres`, `path`  FROM `meropriyatiya`
              JOIN  `tipymeropriyatiy` ON `tipymeropriyatiy`.`id`=`meropriyatiya`.`idtipa`
               WHERE `tipymeropriyatiy`.`id`=4");
           $meropriyatiya = mysqli_fetch_all($meropriyatiya);
       ?>
<div class="row">
  <div class="leftcolumn"> <?php
    foreach ($meropriyatiya as $meropriyatiye) {
        ?>
    <div class="card">
      <h2><?= $meropriyatiye[0] ?></h2>
      <img src= "<?= $meropriyatiye[3] ?>" style="width:50%">
      <p><?= $meropriyatiye[2] ?></p>
      <p><?= $meropriyatiye[1] ?></p>
    </div>
  </tr>
<?php
}
?>
  </div>
<?php
$connect=mysqli_connect('localhost', 'root', 'root', 'diplom');
$name = mysqli_real_escape_string($connect, $_POST['name']);
// Проверка существования пользователя
$query = "SELECT login FROM account WHERE login = '$name'";
$result = mysqli_query($connect, $query);
// Если пользователь с таким именем уже существует, выводим сообщение об этом
if((mysqli_num_rows($result) > 0)&&(mb_strlen($name)>1)) {
    echo "Пользователь с именем $name уже существует. Пожалуйста, выберите другое имя.";
} else  if (mb_strlen($name)>1) {
    echo "Вы успешно зарегистрировались";
}
$parol=$_POST['parol'];
mysqli_query($connect, " INSERT INTO `account` (`id`, `login`, `tip`, `parol`)
 VALUES (NULL, '$name', 'клиент', '$parol');");
?>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content"  method="post" id="are">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="Name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>

      <label for="psw"><b>Password</b></label>
      <input type="text" placeholder="Enter Password" name="parol" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="text" placeholder="Repeat Password" name="parol-repeat" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
