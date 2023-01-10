<?php
    include "DB/database.php";

    $full = $database->query("SELECT * FROM `full` ORDER BY `id` DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рецепты</title>
    <link href="sass/style.css" rel="stylesheet">
</head>
<body>
    
    <?php require_once"blocks/header.php" ?>

    <section class="main">
        <div class="container">
            <div class="main__title">Результаты поиска:</div>
            <a class="main__category-search" href="#">Поиск по категориям</a>
            <div class="wrapper">

                <?php foreach ($full as $full): ?>        
                    
                    <div class="main__recipe">
                    <a href="recipe.php?id=<?php echo $full["id"]; ?>"><div class="main__title-1"> <?php echo $full["title"]; ?> </div>
                    <img class="main__recipe-img" src="/img/Recipes/<?php echo $full["img"]; ?>"></a>
                    <span class="main__list-category">
                         Категория: <a class="main__category" href="#"> <?php echo $full["category"]; ?> </a>
                    </span>
                    <p class="main__subtitle"> <?php echo $full["intro_text"]; ?> </p>
                    <span class="main__list">
                        Ингредиенты: 
                        <div class="main__list-item"> <?php echo $full["ingredients"]; ?> </div>
                    </span>
                    </div>

                <?php endforeach; ?>

                <div class="main__btn-group">
                    <button class="main__btn">1</button>
                </div>
            </div>
        </div>
    </section>

    <?php require_once"blocks/footer.php" ?>

</body>
</html>