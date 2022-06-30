
<header class="head">
        <nav>
            <div class="head__logo">
                <a href="./main.php">
                    <img src="./static/logo.png" alt="">
                </a>
              
            </div>
            <ul class="head__links">
                <li><a href="./routes.php">Рейсы</a></li>
                <li><a href="./about.php">О компании</a></li>
                <li><a href="./news.php">Новости</a></li>
                <li><a href="./admin.php">Админ</a></li>
            </ul>
            <div class="head__icons">
                <button>
                    <img src="./static/findLop.png" alt="">
                </button>

                <?php if($user) :?>
                    <a href="./Profile.php">
                        <img src="./static/user.png" alt="">
                    </a>
                    <a href="./PHP/exit.php">
                        Выйти
                    </a>
                <?php else :?>
                    <a href="./login.php">
                        <img src="./static/user.png" alt="">
                    </a>
                <?php endif; ?>
               
            </div>
        </nav>
    </header>