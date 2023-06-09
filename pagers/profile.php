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

<div class="info-profile">
    <div class="block-info">
            <p>Имя: <span>Александр</span> </p>
            <p>Фамилия: <span>Суровцев</span> </p>
            <p>Отчество: <span>Николаевич</span> </p>
            <p>Баллы: <span>123</span> </p>
            <p>Кол-во броней: <span>12</span> </p>
            <input type="button" value="Карты" class="btn-cards">
    </div>

    <div class="block-info-2">
        <h2>Рады видеть</h2>
        <p>Ваш личный кабинет где хранятся  данные о ваших поездках</p>
        <input type="button" value="Выход" class="btn-logaut">
    </div>
</div>


<fieldset class="history-fieldset">
    <legend class="history-legend">Информация о бронировании</legend>
        <div class="flex-block">
            <p>Код бронирования:<span> #13568</span></p>
            <p>Стоимость бронирования:<span> 256 $</span></p>
        </div>

    <div class="flex-block">
        <div class="txt-left-history">
            
            <h2>Информация об аренде</h2>

            <div class="flex-block">
                <p>Номер заказа:<span> 13568</span></p>
                <p>Марка автомобиля:<span> fiat</span></p>
            </div>

            <div class="flex-block">
               <p>Модель автомобиля:<span> rapid</span></p>
            </div>

            <div class="flex-block">
                <p>Дата начала аренды:<span> 13.02.23</span></p>
                <p>Дата окончания аренды:<span> 15.02.23</span></p>
            </div>

            <div class="flex-block">
                <p>Количество дней аренды:<span> 2 </span></p>
                <p>Филиал аренды:<span> российский</span></p>
            </div>
            
            <input type="button" value="Бронировать повторно" class="btn-history">

        </div>
        
        <div class="img-right-history">
          <img src="../img/history.png" class="img-history">
        </div>
    </div>
  </fieldset>


</main>


    <?php include('footer.php');?>
</body>
</html>