<?php 
    session_start();

    //if ($_SESSION['user']) {
    //    header('Location: ../profile.php');
    //}
?>

<header class="header">
    <div class="container">
        <a href="index.php" class="header__logo"><img src="/img/icons/Povar.png" alt="main_icon" width="100px" height="100px"></a>
        <form class="header__search-bar" action="../search.php" method="POST">
            <input class="header__placeholder" type="text" placeholder="Поиск по проверенным рецептам...">
            <button class="header__btn" type="submit"><img class="header__img-btn" src="/img/icons/lupa.png"></button>
        </form>
        <a class="header__ingredients" href="#">Поиск по ингредиентам</a>
        <a id="open_pop_up"><button class="header__btn-entrance">Вход</button></a>

        <div id="pop_up" class="header__pop-up">
            <div class="header__pop-up-container">
                <div class="header__pop-up-body" id="pop_up_body">
                    <p>Вход на сайт:</p>
                    <form action="/authorization/aut.php" method="post">
                        <input name="login" type="email" placeholder="E-mail">
                        <input name="password" type="password" placeholder="Пароль">
                        <button type="submit">Вход</button>
                        <a href="#pop_up_reg" id="open_pop_up_reg" class="header_reg" onclick="nextStep(1)">Регистрация</a>
                        
                        <?php
                            if ($_SESSION['message-l']) {
                                echo '<div class="header__msg"> ' . $_SESSION['message-l'] . ' </div>';
                            }
                            unset($_SESSION['message-l']);
                        ?>

                    </form>
                    <div class="header__pop-up-close" id="pop_up_close">&#10006</div>
                </div>
            </div>
        </div>

        <div id="pop_up_reg" class="header__pop-up">
            <div class="header__pop-up-container">
                <div class="header__pop-up-body" id="pop_up_body">
                    <p>Регистрация:</p>
                    <form action="/authorization/reg.php" method="post">
                        <input name="login" type="email" placeholder="E-mail">
                        <input name="name" type="text" placeholder="Имя">
                        <input name="password" type="password" placeholder="Пароль">
                        <input name="password_confirm" type="password" placeholder="Подтвердите пароль">
                        <button type="submit">Регистрация</button>
                        <a href="#pop_up" class="header_reg" onclick="nextStep(2)">Вход</a>
                        <?php
                            if ($_SESSION['message-successful']) {
                                echo '<div class="header__msg-successful"> ' . $_SESSION['message-successful'] . ' </div>';
                            } else {
                                echo '<div class="header__msg"> ' . $_SESSION['message'] . ' </div>';
                            }
                            unset($_SESSION['message-successful']);
                            unset($_SESSION['message']);    
                        ?> 
                    </form>
                    <div class="header__pop-up-close" id="pop_up_close_reg">&#10006</div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/js/pop.js"></script>