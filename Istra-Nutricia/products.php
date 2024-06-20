<?php
    include "db/link.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link href="sass/style.css" rel="stylesheet">
</head>
<body>

    <?php require_once"blocks/header.php" ?>

    <section class="products">
        <div class="container">
            <div class="products__title"> Каталог </div>
            <div class="products__catalog">
                <div class="products__catalog-content">

                    <?php foreach($quer_products as $products): ?>

                        <div class="products__catalog-content-box">
                            <img class="products__catalog-content-box-img" src="assets/products/<?php echo $products['img']; ?>">
                            <div class="products__catalog-content-box-title"> <?php echo $products['title'] ?> </div>
                            <a class="products__catalog-content-box-btn-link" href="product-f.php?id=<?php echo $products["id"]; ?>">  
                                <button class="products__catalog-content-box-btn"> Узнать подробнее </button>
                            </a>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>

    <?php require_once"blocks/footer.php" ?>

</body>
</html>
