<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php include ('header.php');?>


<main>

<fieldset class="fieldset-booking">
    <legend class="legend-booking">Данные о Авто</legend>
    <input type="text"  class="inp-booking" placeholder="Идентификатор машины">
    <input type="text"  class="inp-booking" placeholder="Марка авто">
    <input type="text"  class="inp-booking" placeholder="Название авто">
    <input type="text"  class="inp-booking" placeholder="Номер машины">
    <input type="text"  class="inp-booking" placeholder="Дата бронирования">
    <input type="text"  class="inp-booking" placeholder="Дата возврата">
    <input type="text"  class="inp-booking" placeholder="Стоимость бронирования за день">
    <input type="text"  class="inp-booking" placeholder="Филиал">

  </fieldset>

  <fieldset class="fieldset-booking">
    <legend class="legend-booking">Данные о Клиенте</legend>
    <input type="text"  class="inp-booking" placeholder="Имя">
    <input type="text"  class="inp-booking" placeholder="Фамилия">
    <input type="text"  class="inp-booking" placeholder="Отчество">
    <input type="text"  class="inp-booking" placeholder="Номер телефона">
    <input type="text"  class="inp-booking" placeholder="Паспортные данные">
    <input type="text"  class="inp-booking" placeholder="Дата рождения">
    <input type="text"  class="inp-booking" placeholder="Банковская карта">
    <input type="button" value="Бронировать" class="btn-booking">

  </fieldset>


</main>



    <?php include('footer.php');?>
</body>
</html>