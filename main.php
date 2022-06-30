<?php
    require('./PHP/Database.php');
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
    <div class="slider">
        <div class="item-slider__bullets bullets">
            <div class="bullets__item bullets__item_active"></div>
            <div class="bullets__item"></div>
            <div class="bullets__item"></div>
        </div>
        <div class="slider__scroll ">
            <div class="slider__item item-slider">
                <div class="item-slider__image">
                    <img src="./static/Rectangle 2.png" alt="">
                </div>
                <div class="item-slider__text">
                    <h3 class="item-slider__title">
                        В Европу за копейки
                    </h3>
                    <p class="item-slider__paragraph">
                        Отправьтесь на незабываемое путешествие
                        в европейский город Калининград
                    </p>
                </div>
               
            </div>
            <div class="slider__item item-slider">
                <div class="item-slider__image">
                    <img src="./static/Rectangle 2-2.png" alt="">
                </div>
                <div class="item-slider__text">
                    <h3 class="item-slider__title">
                        В погоне за красотой

                    </h3>
                    <p class="item-slider__paragraph">         
                        Отправляйтесь в удивительную Казань и насладитесь
                         достопримечательностями и красотой города
                    </p>
                </div>
                
            </div>
            <div class="slider__item item-slider">
                <div class="item-slider__image">
                    <img src="./static/Rectangle 2-3.png" alt="">
                </div>
                <div class="item-slider__text">
                    <h3 class="item-slider__title">
                        На море с удовольствием
                    </h3>
                    <p class="item-slider__paragraph">
                        Отправляйтесь в солнечный Крым и окунитесь 
                        в Азовское и Чёрное море
                    </p>
                </div>
                
            </div>
        </div>
    </div>

    <section class="forms">
        <div class="forms__cont">
            <ul >
                <li class="active"><button data-value="1">Бронирование</button></li>
                <li><button data-value="2">Онлайн регистрация</button></li>
                <li><button data-value="3">Мои бронирования</button></li>
                <li><button data-value="4">Статус рейса</button></li>
            </ul>
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
                    <input type="text" placeholder="Туда">
                    <img src="./static/_x31_5_38_.png" alt="">
                </div>
                <div class="forms__input-wrapper">
                    <input type="text" placeholder="Обратно">
                    <img src="./static/_x31_5_38_.png" alt="">
                </div>
                <button type="submit"> 
                    <img src="./static/Group.png" alt="">
                </button>
            </form>
        </div>
    </section>
    <section class="special">
        <div class="cont">
           <h2 class="title special__h2">Спецпредложения</h2>

           <div class="special__wrapper">
               <div class="special__flex">
                   <div class="special__flex-item">
                    <div class="special__title">
                        <h3>Россия и страны снг</h3>
                        <img src="./static/Rectangle 21.png" alt="">
                    </div>
                    <div class="special__body">
                        <div class="special__flight">
                            <div class="special__flight-info">
                                <h3>Санкт-Петербург</h3>
                                <p>Вылет: Москва</p>
                            </div>
                            <p>От 8 279руб</p>
                        </div>
                        <div class="special__flight">
                            <div class="special__flight-info">
                                <h3>Санкт-Петербург</h3>
                                <p>Вылет: Москва</p>
                            </div>
                            <p>От 8 279руб</p>
                        </div>
                        <div class="special__flight">
                            <div class="special__flight-info">
                                <h3>Санкт-Петербург</h3>
                                <p>Вылет: Москва</p>
                            </div>
                            <p>От 8 279руб</p>
                        </div>
                    </div>
               </div>
                   <div class="special__flex-item">
                    <div class="special__title">
                        <h3>Россия и страны снг</h3>
                        <img src="./static/Rectangle 21.png" alt="">
                    </div>
                    <div class="special__body">
                        <div class="special__flight">
                            <div class="special__flight-info">
                                <h3>Санкт-Петербург</h3>
                                <p>Вылет: Москва</p>
                            </div>
                            <p>От 8 279руб</p>
                        </div>
                        <div class="special__flight">
                            <div class="special__flight-info">
                                <h3>Санкт-Петербург</h3>
                                <p>Вылет: Москва</p>
                            </div>
                            <p>От 8 279руб</p>
                        </div>
                        <div class="special__flight">
                            <div class="special__flight-info">
                                <h3>Санкт-Петербург</h3>
                                <p>Вылет: Москва</p>
                            </div>
                            <p>От 8 279руб</p>
                        </div>
                    </div>
               </div>
                 
               </div>
           </div>
        </div>
    </section>

    <section class="sale">
        <div class="cont-2">
           <h2 class="title special__h2">Акции</h2>

           <div class="sale__Flex">
               <div class="sale__flex-item">
                   <div class="sale__img">
                       <img src="./static/Rectangle 33.png"  alt="">
                   </div>
                   <div class="sale__body">
                       <h2 class="sale__title">
                            В страну восходящего солнца
                       </h2>
                       <p>
                         При покупке билета в Токио  скидка 15% на отели и хостелы
                       </p>

                   </div>
                   <div class="sale__footer">
                       <a href="">Подробнее</a>
                   </div>
               </div>
               <div class="sale__flex-item">
                <div class="sale__img">
                    <img src="./static/Rectangle 34.png"  alt="">
                </div>
                <div class="sale__body">
                    <h2 class="sale__title">
                         В страну восходящего солнца
                    </h2>
                    <p>
                      При покупке билета в Токио  скидка 15% на отели и хостелы
                    </p>

                </div>
                <div class="sale__footer">
                    <a href="">Подробнее</a>
                </div>
            </div>
            <div class="sale__flex-item">
                <div class="sale__img">
                    <img src="./static/Rectangle 35.png"  alt="">
                </div>
                <div class="sale__body">
                    <h2 class="sale__title">
                         В страну восходящего солнца
                    </h2>
                    <p>
                      При покупке билета в Токио  скидка 15% на отели и хостелы
                    </p>

                </div>
                <div class="sale__footer">
                    <a href="">Подробнее</a>
                </div>
            </div>
           </div>
        </div>
    </section>
    <section class="about">
        <div class="cont-2">
           <h2 class="title special__h2">Новости Pcuto Airlines</h2>

           <div class="sale__Flex">
               <div class="sale__flex-item">
                   <div class="sale__img about__img ">
                       
                   </div>
                   <div class="sale__body">
                       <h2 class="sale__title">
                            На отпуск куда глаза глядят
                       </h2>
                       <p>
                        Множество рейсов со скидкой 45%
                       </p>

                   </div>
                   <div class="sale__footer">
                        27 мая 2022
                   </div>
               </div>
               <div class="sale__flex-item">
                <div class="sale__img about__img  about_s">
                    
                </div>
                <div class="sale__body">
                    <h2 class="sale__title">
                        Pcuto Airlines в топе
                    </h2>
                    <p>
                        Множество положительных отзывов идут только ввысь
                    </p>

                </div>
                <div class="sale__footer">
                    27 мая 2022
               </div>
               </div>
               <div class="sale__flex-item">
                <div class="sale__img about__img  about_t">
                    
                </div>
                <div class="sale__body">
                    <h2 class="sale__title">
                        Pcuto Airlines в топе
                    </h2>
                    <p>
                        Множество положительных отзывов идут только ввысь
                    </p>

                </div>
                <div class="sale__footer">
                    27 мая 2022
               </div>
               </div>
            
          
            
               
           </div>
        </div>
    </section>
    
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