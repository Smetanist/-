<?php
    include "db/link.php";

    $sql_needsMain = $_GET["id"];
    $sql_needsMain = $pdo->query("SELECT * FROM `needs` WHERE `id`='$sql_needsMain'");

    $sql_needsRec = $pdo->query("SELECT * FROM `needs` ORDER BY RAND() LIMIT 3");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istra-Nutricia_needs-f</title>
    <link href="sass/style.css" rel="stylesheet">
</head>
<body>
    
    <?php require_once"blocks/header.php" ?>

    <section class="needs-f">
        <div class="container">

            <?php foreach($sql_needsMain as $needs_f): ?>

                <div class="needs-f__section">
                    <div class="needs-f__title"> <?php echo $needs_f['title']; ?> </div>
                    <div class="needs-f__description"> <?php echo $needs_f['description']; ?> </div>
                </div>

            <?php endforeach; ?>
            
            <div class="needs-f__title"> Вам будет интересно </div>
            <div class="needs-f__rec">
                <?php foreach($sql_needsRec as $rec): ?>

                    <a href="needs-f.php?id=<?php echo $rec["id"]; ?>">
                        <div class="needs-f__rec-box">
                            <img class="needs-f__rec-box-img" src="assets/articles/<?php echo $rec['img'] ?>">
                            <div class="needs-f__rec-box-title"> <?php echo $rec['title'] ?> </div>
                            <div class="needs-f__rec-box-description"> <?php echo $rec['description-main'] ?> </div>
                        </div>
                    </a>

                <?php endforeach; ?>
            </div>    

        </div>
    </section>

    <?php require_once"blocks/footer.php" ?>

</body>
</html>