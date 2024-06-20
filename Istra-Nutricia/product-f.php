<?php
    include "db/link.php";

    $sql_productMain = $_GET["id"];
    $sql_productMain = $pdo->query("SELECT * FROM `product` WHERE `id`='$sql_productMain'");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istra-Nutricia_product-f</title>
    <link href="sass/style.css" rel="stylesheet">
</head>
<body>
    
    <?php require_once"blocks/header.php" ?>

        <section class="product-f">
            <div class="container">
                <?php foreach($sql_productMain as $product_f): ?>
                    <div class="product-f__title"> <?php echo $product_f['title']; ?> </div>
                        <div class="product-f__section">
                            <img class="product-f__img" src="assets/products/<?php echo $product_f['img']; ?>">
                            <div class="product-f__info">
                                <div class="product-f__info-description"> <?php echo $product_f['description']; ?> </div>
                                <h class="product-f__info-wher"> <b>Где купить</b> </h>
                                <a class="product-f__info-link" target="_blank" href="<?php echo $product_f['link']; ?>">
                                    <img class="product-f__info-link-img" src="assets/others/Frame-390.png">
                                </a>
                                <a class="product-f__info-link" target="_blank" href="<?php echo $product_f['link2']; ?>">
                                    <img class="product-f__info-link-img" src="assets/others/image-48.png">
                                </a>
                            </div>
                        </div>

                        <div class="product-f__feed">
                            <div class="product-f__feed-title"> <b>Состав</b> </div>
                            <div class="product-f__feed-text"> <?php echo $product_f['structure']; ?> </div>
                            <div class="product-f__feed-title"> <b>Способ приготовления</b> </div>
                            <div class="product-f__feed-text"> <?php echo $product_f['feeding']; ?> </div>
                        </div>
                <?php endforeach; ?>
            </div>
        </section>

    

    <?php require_once"blocks/footer.php" ?>

</body>
</html>
