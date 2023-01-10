<?php
    include "DB/database.php";

    $full = $_GET["id"];
    $full = $database->query("SELECT * FROM `full` WHERE id='$full'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рецепты</title>
    <link href="/sass/style.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="index.html" class="header__logo"><img src="/img/icons/Povar.png" alt="main_icon" width="100px" height="100px"></a>
            <form class="header__search-bar">
                <input class="header__placeholder" type="text" placeholder="Поиск по проверенным рецептам...">
                <button class="header__btn" type="submit"><img class="header__img-btn" src="/img/icons/lupa.png"></button>
            </form>
            <a class="header__ingredients" href="#">Поиск по ингредиентам</a>
            <a href="#" id="open_pop_up"><button class="header__btn-entrance">Вход</button></a>
            <div class="header__pop-up" id="pop_up">
                <div class="header__pop-up-container">
                    <div class="header__pop-up-body" id="pop_up_body">
                        <p>Вход на сайт:</p>
                        <form action="">
                            <input type="text" placeholder="Имя или e-mail">
                            <input type="text" placeholder="Пароль">
                            <button>Вход</button>
                        </form>
                        <div class="header__pop-up-close" id="pop_up_close">&#10006</div>
                    </div>
                </div>
            </div>

            <nav class="header__nav">
                <ul class="header__nav-list">
                    <li class="header__nav-item">
                        <a href="index.php" class="header__nav-link">Все рецепты</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#" class="header__nav-link">Горячие блюда</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#" class="header__nav-link">Супы</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#" class="header__nav-link">Салаты</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#" class="header__nav-link">Закуски</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#" class="header__nav-link">Десерты</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#" class="header__nav-link">Соусы</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <?php
        foreach ($full as $full):
    ?> 

        <section class="recipeFull">
            <div class="container">
                <div class="recipeFull__title"> <?php echo $full["title"]; ?> </div>
                <img class="recipeFull__recipe-img" src="/img/Recipes/<?php echo $full["img"]; ?>"></a>
                <span class="recipeFull__list-category">
                     Категория: <a class="recipeFull__category" href="#"> <?php echo $full["category"]; ?> </a>
                </span>
                <p class="recipeFull__subtitle"> <?php echo $full["intro_text"]; ?> </p>
                <p class="recipeFull__subtitle2"> <?php echo $full["full_text"]; ?> </p>
            </div>
        </section>

    <?php endforeach; ?>    

    <section class="footer">
        <div class="container">
            <a href="#" class="footer__title">Рецепты</a>
            <a href="#" class="footer__link">О нас</a> 
            <ul class="footer__social-list">
                <li class="footer__social-item">
                    <a href="#" class="footer__vk"><img src="/img/social network/vk.svg" alt="social network_img"></a>
                </li>
                <li class="footer__social-item">   
                    <a href="#" class="footer__facebook"><img src="/img/social network/facebook.svg" alt="social network_img"></a>
                </li>   
                <li class="footer__social-item">  
                    <a href="#" class="footer__instagram"><img src="/img/social network/instagram.svg" alt="social network_img"></a>
                </li> 
                <li class="footer__social-item">    
                    <a href="#" class="footer__youtube"><img src="/img/social network/youtube.svg" alt="social network_img"></a>
                </li>    
            </ul>    
            <a href="#" class="footer__feedback"></a>
        </div>    
    </section>

    <script src="/js/script.js"></script>
</body>
</html>