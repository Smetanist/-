<?php
    session_start();

    if (!$_SESSION['user']) {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="sass/style.css" rel="stylesheet">
</head>
<body>

    <?php require_once"blocks/header.php" ?>

    <section class="profile">
        <div class="container">
            <div class="profile__name"> <?= $_SESSION['user']['name'] ?> </div>
            <a href="/authorization/logout.php" class="profile__logout">Выход</a>
        </div>
    </section>

    <?php require_once"blocks/footer.php" ?>

</body>
</html>