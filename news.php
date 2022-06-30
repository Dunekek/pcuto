<?php
    require('./PHP/Database.php');
    $query = $pdo->prepare("SELECT * FROM News");
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
        <section class="about" style="background:  transparent; min-height: 390px;">
            <div class="cont-2">
               <h2 class="title special__h2">Новости Pcuto Airlines</h2>
               
              
               <div class="sale__Flex" style="margin-top: 30px; display: block">
               <?php foreach($result as $item) :?>
                <div style="margin-bottom: 30px; position: relative" class="sale__flex-item">

                <div class="test" style="position: absolute; right: 10px;">
                    <a href="./PHP/deletenews.php?id=<?=  $item['id_news'];?>">X</a>
                </div>
                    <div class="sale__img about__img "
                        style="background: url('./newsImg/<?=  $item['img'];?>') no-repeat"
                    >
                        
                    </div>
                    <div class="sale__body">
                        <h2 class="sale__title">
                            <?=  $item['title'];?>
                        </h2>
                        <p>
                        <?=  $item['description'];?>
                        </p>
 
                    </div>
                    <div class="sale__footer">
                    <?=  $item['date'];?>
                    </div>
                </div>
            
                <?php endforeach; ?>
               
               
                </div>
            </div>
            </div>
        </section>
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