<?php
    include "db/link.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Needs</title>
    <link href="sass/style.css" rel="stylesheet">
    <script src="js/filter-needs.js"></script>
</head>
<body>
        
<?php require_once"blocks/header.php" ?>

<section class="needs">
    <div class="container">
        <div class="needs__title"> Энциклопедия родителей </div>

        <div class="needs__content">

            <?php foreach($quer_needs as $needs): ?>

                <a href="needs-f.php?id=<?php echo $needs["id"]; ?>">
                    <div class="needs__content-box" data-cat="<?php echo $needs['category']; ?>">
                        <img class="needs__content-box-img" src="assets/articles/<?php echo $needs['img']; ?>">
                        <div class="needs__content-box-title"> <?php echo $needs['title']; ?> </div>
                        <div class="needs__content-box-description"> <?php echo $needs['description-main']; ?> </div>
                    </div>
                </a>
            <?php endforeach; ?>    

        </div>
    </div>
</section>

<?php require_once"blocks/footer.php" ?>

</body>
</html>
