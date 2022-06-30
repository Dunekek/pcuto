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


    
    <main>
       <div class="cont">
           <div class="about">
               <h2 class="about__title">
                О компании
               </h2>
               <p class="about__text">
                    Pcuto Airlines — крупнейшая частная авиакомпания России с самым современным парком воздушных судов на российском рынке авиаперевозок. Широкая маршрутная сеть позволяет нашим пассажирам путешествовать в 181 город в 26 странах мира.
               </p>
               <p class="about__text">
                   Pcuto Airlines входит топ лучших авиакомпаний Восточной Европы в авторитетном международном рейтинге Skytrax. Также по результатам 2022 года Pcuto Aitlines стала одной из самых пунктуальной российской авиакомпанией.
                </p>
                <p class="about__text">    
                    Pcuto Airlines — один из самых экологичных авиаперевозчиков мира, по оценке экологической организации Atmosfair.    
                </p>
           </div>
       </div>

       <section class="contacts cont">
         <h2 class="title special__h2">Контакты</h2>
            <div class="contacts__container">
                <div class="contacts__item">
                    <img src="./static/gmail-svgrepo-com 1.png" alt="">
                    <a>+7(196)777-77-77</a>
                </div>
                <div class="contacts__item">
                    <img src="./static/phone-alt-svgrepo-com 1.png" alt="">
                    <a>example@gmail.com</a>
                </div>
            </div>
       </section>


       <section class="documentation cont">
        <h2 class="title special__h2">Документация</h2>
           <div class="documentation__container">
               <div class="documentation__title">
                   <p class="documentation__text">
                    Информация о страховщике и действующем договоре страхования гражданской отсветственности
                   </p>
                   <a href="">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0001 0C11.5348 0 11.1576 0.377143 11.1576 0.842449V17.0645L8.27764 14.1845C7.94947 13.8563 7.41559 13.8563 7.08743 14.1845C6.75927 14.5127 6.75927 15.0465 7.08743 15.3747L11.4025 19.6898C11.5642 19.8514 11.7797 19.9347 11.9952 19.9347C12.2107 19.9347 12.4262 19.8514 12.5878 19.6898L16.9029 15.3747C17.2311 15.0465 17.2311 14.5127 16.9029 14.1845C16.5748 13.8563 16.0409 13.8563 15.7127 14.1845L12.8327 17.0645V0.837551C12.8376 0.372245 12.4654 0 12.0001 0Z" fill="#F0F6F6"/>
                        <path d="M22.6336 23.1625V18.2792C22.6336 17.8139 22.2565 17.4367 21.7912 17.4367C21.3259 17.4367 20.9487 17.8139 20.9487 18.2792V22.3249H3.0467V18.2792C3.0467 17.8139 2.66956 17.4367 2.20915 17.4367C1.74874 17.4367 1.3667 17.8139 1.3667 18.2792V23.1625C1.3667 23.6278 1.74384 24 2.20915 24H21.7912C22.2565 24 22.6336 23.6278 22.6336 23.1625Z" fill="#F0F6F6"/>
                        </svg>
                   </a>
                  
               </div>
               <div class="documentation__title">
                <p class="documentation__text">
                 Информация о страховщике и действующем договоре страхования гражданской отсветственности
                </p>
                <a href="">
                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12.0001 0C11.5348 0 11.1576 0.377143 11.1576 0.842449V17.0645L8.27764 14.1845C7.94947 13.8563 7.41559 13.8563 7.08743 14.1845C6.75927 14.5127 6.75927 15.0465 7.08743 15.3747L11.4025 19.6898C11.5642 19.8514 11.7797 19.9347 11.9952 19.9347C12.2107 19.9347 12.4262 19.8514 12.5878 19.6898L16.9029 15.3747C17.2311 15.0465 17.2311 14.5127 16.9029 14.1845C16.5748 13.8563 16.0409 13.8563 15.7127 14.1845L12.8327 17.0645V0.837551C12.8376 0.372245 12.4654 0 12.0001 0Z" fill="#F0F6F6"/>
                     <path d="M22.6336 23.1625V18.2792C22.6336 17.8139 22.2565 17.4367 21.7912 17.4367C21.3259 17.4367 20.9487 17.8139 20.9487 18.2792V22.3249H3.0467V18.2792C3.0467 17.8139 2.66956 17.4367 2.20915 17.4367C1.74874 17.4367 1.3667 17.8139 1.3667 18.2792V23.1625C1.3667 23.6278 1.74384 24 2.20915 24H21.7912C22.2565 24 22.6336 23.6278 22.6336 23.1625Z" fill="#F0F6F6"/>
                     </svg>
                </a>
               
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