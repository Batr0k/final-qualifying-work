
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=date] {
    width: 7%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<h3>Добавление нового мероприятия</h3>

<div class="container">
  <form action="addmeropriyatiye2.php"  enctype="multipart/form-data" method="post">
    <label for="fname">Название мероприятия</label>
    <input type="text"  name="name">

    <label for="lname">Фото</label><br>
    <input type="file"  name="path"><br>

    <label for="country">Тип мероприятия</label>
    <select name="idtipa">
      <option value="1">Кино</option>
      <option value="2">Театр</option>
      <option value="3">Экскурсии</option>
      <option value="4">Концерты</option>
      <option value="5">Фестивали</option>
      <option value="6">Детям</option>
      <option value="7">Спорт</option>
      <option value="8">Наука</option>
      <option value="9">Еда</option>
      <option value="10">Благотворительность</option>
    </select>
    <label for="lname">Дата проведения</label><br>
    <input type="date"  name="date"><br>
    <label for="lname">Где будет проводиться</label><br>
    <input type="text"  name="adres"><br>
    <label for="lname">Сайт мероприятия(необязательно)</label><br>
    <input type="text"  name="site"><br>
    <label for="subject">Описание мероприятия</label>
    <textarea  name="opisaniye" style="height:200px"></textarea>

    <input type="submit" value="Добавить">
  </form>
</div>

</body>
</html>
