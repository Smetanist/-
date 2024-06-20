<?php
    include "db/link.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacancy</title>
    <link href="sass/style.css" rel="stylesheet">
</head>
<body>
    
    <?php require_once"blocks/header.php" ?>

    <section class="vacancy">
        <div class="container">
            <div class="vacancy__title"> Вакансии </div>
            <div class="vacancy__content">

                <?php foreach($quer_vacancy as $vacancy): ?>

                    <div class="vacancy__content-box">
                        <div class="vacancy__content-box-title"> <?php echo $vacancy['title']; ?> </div>
                        <div class="vacancy__content-box-lok"> NUTRICIA | Истра </div>
                        <div class="vacancy__content-box-description"> <?php echo $vacancy['description-main']; ?> </div>
                        <a class="vacancy__content-box-link" href="vacancy-f.php?id=<?php echo $vacancy["id"]; ?>">
                            <button class="vacancy__content-box-btn"> Подробнее </button>
                        </a>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </section>
    
    <?php require_once"blocks/footer.php" ?>

</body>
</html>
