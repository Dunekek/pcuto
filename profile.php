<?php
    require('./PHP/Database.php');
    $query = $pdo->prepare("SELECT * FROM `Tickets` 
    join Flights on Flights.id_flight=Tickets.id_flight
      WHERE id_user=?");
    $query->execute(array(
        $user['id_user']
    ));
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

        <section class="profile cont" >
            <h2>Здравствуйте, <?= $user['name'] ;?></h2>

            <h3>Ваши билеты</h3>

            <?php foreach($result as $item) :?>
                 <div class="cont" style="margin-top: 50px; background: white; padding: 20px 40px; display: flex; justify-content: space-between; align-items: center;">
                <h3>Билет № <?= $item['id_ticket'];?></h3>
                <div class="" >
                    Рейс номер №<?= $item['id_flight'];?>
                    <p>
                    <?=$item['cityFrom'];?>  - <?=$item['cityTo'];?> 
                    </p>
                    <p>
                    <?=$item['flight_date'];?>
                    </p>
                </div>
                <div class="">
                <a href="./PHP/deleteTicket.php?ticket=<?= $item['id_ticket'];?> " style="padding: 10px 20px; background: rgb(87, 87, 248); color: white; display: inline-block;">Отказаться от полета</a>
                </div>
            </div>
            <?php endforeach; ?>

           
        </section>
        
      
       
       
      
        
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