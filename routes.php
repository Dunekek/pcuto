<?php
    require('./PHP/Database.php');

    $query = $pdo->prepare("SELECT * FROM `Flights`
    where flight_date>CURRENT_DATE()");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
  <?php
    require('./nav.php');
  ?>


    <main>
       


        <div class="cont">
            <h2 class="title routes__h2">Информация о рейсах</h2>
            <form class="forms__item-by-value" data-value="1">
                <div class="forms__input-wrapper forms__to-input">
                    <input class="" type="text" placeholder="Откуда">
                </div>
                <button>
                    <img src="./static/arrows-svgrepo-com (1) 2.png" width="20" alt="">
                </button>
                <div class="forms__input-wrapper">
                    <input type="text" placeholder="Куда">
                   
                </div>
                <div class="forms__input-wrapper">
                    <input type="text" placeholder="Дата">
                    <img src="./static/_x31_5_38_.png" alt="">
                </div>
               
                <button type="submit " class="sumbit-routes"> 
                    Проверить статус
                </button>
           
            </form>
            

        </div>
        <?php foreach($result as $flight) :?>
            <div class="cont" style="margin-top: 50px; background: white; padding: 20px 40px; display: flex; justify-content: space-between; align-items: center;">
            <div class="" >
                Рейс номер №<?=$flight['id_flight'];?> 
                <p>
                <?=$flight['cityFrom'];?>  - <?=$flight['cityTo'];?> 
                </p>
                <p>
                <?=$flight['flight_date'];?>
                </p>
            </div>
            <div class="">
               <a href="./buy_ticket.php?id=<?=$flight['id_flight'];?> " style="padding: 10px 20px; background: rgb(87, 87, 248); color: white; display: inline-block;">Купить</a>
            </div>
        </div>
        <?php endforeach; ?>
       
       
      
        
        <div class="cont " style="margin-top: 100px;">
            <form action="" class="error-form">
                <h2>Нашли ошибку?</h2>
                <p>Введите вашу почту и мы свяжемся с вами</p>
                <div class="">
                    <input type="email" placeholder="Email">
                </div>
                <button>Отправить</button>
            </form>
        </div>
       
    
    </main>
 
    
    <footer class="f">
        <div class="f_col">
            <a href="">Главная</a>
            <a href="">Обратная связь</a>
        </div>
        <div class="f_col">
            <a href="">Новости</a>
            <a href="">Услуги</a>
        </div>
        <div class="f_col">
            <a href="">О компании</a>
        </div>
        <div class="f_col">
            <div class="f__socials">
                <a href="">
                    <img src="./static/free-icon-vk-social-logotype-49444 1.png" alt="">
                </a>
                <a href="">
                    <img src="./static/free-icon-vk-social-logotype-49444 1.png" alt="">
                </a>
            </div>

            <a href="">+7(196)777-77-77</a>
        </div>
    </footer>
    
    <script src="./scripts/slider.js"></script>
</body>
</html>