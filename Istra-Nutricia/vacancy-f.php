<?php
    include "db/link.php";

    $sql_vacancy = $_GET["id"];
    $sql_vacancy = $pdo->query("SELECT * FROM `vacancy` WHERE `id`='$sql_vacancy'");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacancy-f</title>
    <link href="sass/style.css" rel="stylesheet">
</head>
<body>

    <?php require_once"blocks/header.php" ?>

    <section class="vacancyF">
        <div class="container">
            <div class="vacancyF__wrap">
                <?php foreach($sql_vacancy as $vac): ?>

                    <div class="vacancyF__left">
                        <div class="vacancyF__left-title"> <?php echo $vac['title']; ?> </div>
                        <div class="vacancyF__left-salary"> <?php echo $vac['salary']; ?> </div>
                        <div class="vacancyF__left-description"> <?php echo $vac['description']; ?> </div>
                    </div>

                <?php endforeach; ?>

                <div class="vacancyF__right">
                    <div class="vacancyF__right-vacancy">
                        <img class="vacancyF__right-vacancy-img" src="assets/logo/logo6455274.png">
                        <div class="vacancyF__right-vacancy-title"> Истра-Нутриция </div>
                        <div class="vacancyF__right-vacancy-contacts"> Контакты: </div>
                        <div class="vacancyF__right-vacancy-contacts-box">
                            <a class="vacancyF__right-vacancy-contacts-box-item" href="tel:88002003388"> 8(800)200-33-88 </a>
                            <a class="vacancyF__right-vacancy-contacts-box-item" href="malito:nutriclub@danone.com"> nutriclub@danone.com </a>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>

    <?php require_once"blocks/footer.php" ?>
    
</body>
</html>
