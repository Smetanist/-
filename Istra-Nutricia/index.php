<?php
    include "db/link.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istra-Nutricia</title>
    <link href="sass/style.css" rel="stylesheet">
    <script src="js/slider.js"></script>
</head>
<body>

    <?php require_once"blocks/header.php" ?>

    <main class="main">

        <div class="container">

            <div class="main__section-product">

                    <div></div>
                <div class="main__section-product-title"> Рекомендуемые продукты </div>
                    <div></div>

                <?php foreach($quer_productMain as $product_main): ?>
                    
                    <div class="main__section-product-box">
                        <img class="main__section-product-box-img" src="assets/products/<?php echo $product_main['img']; ?>">
                        <div class="main__section-product-box-info">
                            <div class="main__section-product-box-info-title"> <?php echo $product_main['title']; ?> </div> 
                            <button class="main__section-product-box-info-readmore"> 
                                <a href="product-f.php?id=<?php echo $product_main["id"]; ?>" class="main__section-product-box-info-readmore"> Узнать подробнее </a>
                            </buttin> 
                        </div>
                    </div> 

                <?php endforeach; ?>

                        <div></div>
                <a class="main__section-product-box-articles-btn-link" href="products.php"> 
                    <button class="main__section-product-box-articles-btn"> Смотреть каталог </button>
                </a>
            </div>

            <div class="main__section-needs">
                    <div></div>
                <div class="main__section-needs-title"> Питание для детей с разными потребностями </div>
                    <div></div>

                <?php foreach($quer_needsMain as $needs_main): ?>

                    <div class="main__section-needs-box">
                        <img class="main__section-needs-box-img" src="assets/articles/<?php echo $needs_main['img']; ?>">
                        <div class="main__section-needs-box-info">
                            <div class="main__section-needs-box-info-title"> <?php echo $needs_main['title']; ?> </div>
                            <div class="main__section-needs-box-info-description"> <?php echo $needs_main['description-main'] ?> </div>
                            <div class="main__section-needs-box-info-readmore">
                                <a class="main__section-needs-box-info-readmore-text" href="needs-f.php?id=<?php echo $needs_main["id"]; ?>"> Читать далее </a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>    

                    <div></div>
                <a class="main__section-needs-box-articles-btn-link" href="needs.php">
                    <button class="main__section-needs-box-articles-btn"> Смотреть все статьи </button>
                </a>
            </div>

            <div class="main__section-info">

            </div>
        </div>
    </main>

    <?php require_once"blocks/footer.php" ?>
    
</body>
</html>
