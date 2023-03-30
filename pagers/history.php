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
          <img src="../img/history-2.png" class="img-history">
        </div>
    </div>
  </fieldset>



  </main>
    <?php include('footer.php');?>
</body>
</html>