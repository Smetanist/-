<?php
    session_start();
    require_once '../DB/database.php';

    $login = $_POST['login'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
        $password = md5($password);

        $users = $database->query("INSERT INTO `users` (`id`, `login`, `name`, `password`) VALUES (NULL, '$login', '$name', '$password')");

        $_SESSION['message-successful'] = 'Регистрация прошла успешно';
        header('Location: ../index.php');
    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../index.php');
    }
?>
