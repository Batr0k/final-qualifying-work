<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=idge">
<title>Страница авторизации</title>
</head>
<style >
input {
    width: 30%;
    margin: 5px 0;
    padding: 5px 15px;
  }
</style>
<body>
<div class="container mt-4">
</div>
<h1 style="text-align:center">Авторизация</h1>
<form  style="text-align:center" action = "validation-form/auth.php" method="post">
<input type="text" class="form-control" name="login"
id="login" placeholder="Введите логин"><br>
<input type="password" class="form-control" name="pass"
id="pass" placeholder="Введите пароль"><br>
<button class="btn btn-success" type="submit">Авторизоваться</button>
</form>
</body>
</html>
