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

    
    <div class="block-cards">
            <div class="img-cards">
                <img src="../img/mir.png" alt="" class="img-png-card">
            </div>
            <div class="info-cards">
                <p>Номер карты: 2220 1254 3546 254</p>
                <p >дата: 08/25</p> 
                <p>cvs: 123</p>
                <input type="button" value="Удалить" class="btn-cards">
            </div>
    </div>

    <div class="block-cards">
            <div class="img-cards">
                <img src="../img/visa.png" alt="" class="img-png-card">
            </div>
            <div class="info-cards">
                <p>Номер карты: 2220 1254 3546 254</p>
                <p >дата: 08/25</p> 
                <p>cvs: 123</p>
                <input type="button" value="Удалить" class="btn-cards">
            </div>
    </div>


    <div class="block-cards">
            <div class="img-cards">
                <img src="../img/master.png" alt="" class="img-png-card">
            </div>
            <div class="info-cards">
                <p>Номер карты: 2220 1254 3546 254</p>
                <p >дата: 08/25</p> 
                <p>cvs: 123</p>
                <input type="button" value="Удалить" class="btn-cards">
            </div>
    </div>

    <input type="button" value="Добавить новую карту" id="add-cards" onclick="vision_win()">


    <div id="modal-windows">
        <div class="modal-block">
                <div class="img-cards">
            
                    <img src="../img/master.png" alt="" class="img-png-card">
            
                </div>
                <div class="info-user">

                <input type="text" placeholder="Номер карты" class="inp-modal-cards">
                <input type="text" placeholder="дата" class="inp-modal-cards">
                <input type="password" placeholder="cvs"  class="inp-modal-cards">
                <input type="text" placeholder="Держатель карты"  class="inp-modal-cards">
                
                    <input type="button" value="добавить" class="btn-cards" onclick="add_crd()">
                    
                </div>
                <input type="button" value="x" id="close-windows" onclick="close_crd()">
         </div>
    </div>

    </main>
    <?php include('footer.php');?>
    <script src="../script/js.js"></script>
</body>
</html>