
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
    width: 1000px;
}
.card {
     background-color: white;
     padding: 20px;
     margin-top: 20px;
}
.link {
  text-decoration: none;
  color:black
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
.row:after {
  content: "";
  display: table;
  clear: both;
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
* {box-sizing: border-box;}
ul {list-style-type: none;}
.month {
  position:fixed;
     right: 1%;
     top: 15%;
    padding: 70px 25px;
    width: 45%;
    background: #4CAF50;
    text-align: center;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.weekdays {
  position:fixed;
     right: 1%;
     top: 34%;
    margin: 0;
    width: 45%;
    padding: 10px 0;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

.days {
  position:fixed;
     right: 1%;
     top: 38%;
  width: 45%;
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

.days li .active {
    padding: 5px;
    background: #4CAF50;
    color: white !important
}
.opisaniye {
  -webkit-line-clamp:3;
   display: -webkit-box;
   -webkit-box-orient: vertical;
   overflow: hidden;
}
</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="http://localhost/diplom/start.php">Главная</a>
  <a href="http://localhost/diplom/exkursii.php">Экскурсии</a>
  <a href="http://localhost/diplom/kino.php">Кино</a>
  <a href="http://localhost/diplom/koncerty.php">Концерты</a>
  <a href="http://localhost/diplom/teatr.php">Театр</a>
  <a href="http://localhost/diplom/detyam.php">Детям</a>
  <a href="http://localhost/diplom/festivali.php">Фестивали</a>
  <a href="http://localhost/diplom/sport.php">Спорт</a>
  <a href="http://localhost/diplom/nauka.php">Наука</a>
  <a href="http://localhost/diplom/eda.php">Еда</a>
  <a href="http://localhost/diplom/blagotvoritelnost.php">Благотворительность</a>
  <div class="topnav-right"> <?php
    if(isset($_COOKIE["Вход"])){ ?>
      <a>Добро пожаловать, <?=$_COOKIE["Вход"]?></a>
      <a href="http://localhost/diplom/izbrannoye.php">Избранное</a>
      <a href="http://localhost/diplom/addmeropriyatiye.php">Добавить новое мероприятие</a>
      <a href="http://localhost/diplom/logout.php">Выйти</a>
    <?php } else {  ?>
    <a onclick="document.getElementById('id02').style.display='block'">Войти</a>
  <a onclick="document.getElementById('id01').style.display='block'">Зарегистрироваться</a> <?php } ?>
  </div>
</div>

<div style="padding-left:16px">
  <div class="month">
  <ul>
    <li class="prev">❮</li>
    <li class="next">❯</li>
    <li>
      Май<br>
      <span style="font-size:18px">2023</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Пн</li>
  <li>Вт</li>
  <li>Ср</li>
  <li>Чт</li>
  <li>Пт</li>
  <li>Сб</li>
  <li>Вс</li>
</ul>

<ul class="days">
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <a href="http://localhost/diplom/filtrdate.php"><li>5</li></a>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
  <h2>Мероприятия</h2>
</div>
<?php
           $meropriyatiya = mysqli_query( $connect, "SELECT `name`, `opisaniye`, `adres`, `path`, `id` FROM `meropriyatiya`");
           $meropriyatiya = mysqli_fetch_all($meropriyatiya);
       ?>
<div class="row">
  <div class="leftcolumn"> <?php
    foreach ($meropriyatiya as $meropriyatiye) {
        ?>
    <a class="link" href="http://localhost/diplom/meropriyatiye.php?id=<?= $meropriyatiye[4] ?>"><div class="card">
      <h2><?= $meropriyatiye[0] ?></h2>
    <img src= "<?= $meropriyatiye[3] ?>" style="width:100%">
      <p><?= $meropriyatiye[2] ?></p>
      <p class="opisaniye"><?= $meropriyatiye[1] ?></p>
    </div></a>
<?php
}
?>
  </div>

</div>
<?php
// Скрипт для регистрации
$connect=mysqli_connect('localhost', 'root', 'root', 'diplom');
$name = mysqli_real_escape_string($connect, $_POST['name']);
$query = "SELECT login FROM account WHERE login = '$name'";
$result = mysqli_query($connect, $query);
if((mysqli_num_rows($result) > 0)&&(mb_strlen($name)>1)) {
    echo "Пользователь с именем $name уже существует. Пожалуйста, выберите другое имя.";
} else  if (mb_strlen($name)>1) {
    echo "Вы успешно зарегистрировались";
}
$parol=$_POST['parol'];
mysqli_query($connect, " INSERT INTO `account` (`id`, `login`, `tip`, `parol`)
 VALUES (NULL, '$name', 'клиент', '$parol');");
 // Конец скрипта для регистрации
?>
<!-- Форма регистрации-->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content"  method="post" id="are">
    <div class="container">
      <h1>Регистрация</h1>
      <p>Заполните эти формы для регистрации аккаунта</p>
      <hr>
      <label for="Name"><b>Логин</b></label>
      <input type="text" placeholder="Введите логин" name="name" required>

      <label for="psw"><b>Пароль</b></label>
      <input type="text" placeholder="Введите пароль" name="parol" required>

      <label for="psw-repeat"><b>Повторите пароль</b></label>
      <input type="text" placeholder="Введите пароль еще раз" name="parol-repeat" required>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Отмена</button>
        <button type="submit" class="signupbtn">Зарегистрироваться</button>
      </div>
    </div>
  </form>
</div>
<!-- Форма входа-->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content"   action= "login.php"method="post" id="are">
    <div class="container">
      <h1>Вход</h1>
      <p>Заполните эти формы для входа в свой аккаунт</p>
      <hr>
      <label for="Name"><b>Логин</b></label>
      <input type="text" placeholder="Введите логин" name="name" required>

      <label for="psw"><b>Пароль</b></label>
      <input type="text" placeholder="Введите пароль" name="parol" required>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Отмена</button>
        <button type="submit" class="signupbtn">Войти</button>
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
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
