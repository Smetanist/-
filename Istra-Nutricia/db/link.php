<?php
    $user = 'root';
    $password = 'root';
    $db = 'istra-nutricia';
    $host = 'localhost';
    
    try{
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql_productMain = "SELECT * FROM `product` LIMIT 3";
        $quer_productMain = $pdo->query($sql_productMain);

        $sql_needsMain = "SELECT * FROM `needs` LIMIT 3";
        $quer_needsMain = $pdo->query($sql_needsMain);

        $sql_products = "SELECT * FROM `product`";
        $quer_products = $pdo->query($sql_products);

        $sql_needs = "SELECT * FROM `needs`";
        $quer_needs = $pdo->query($sql_needs);

        $sql_vacancy = "SELECT * FROM `vacancy`";
        $quer_vacancy = $pdo->query($sql_vacancy);
    } catch(PDOException $a){
        echo 'Подключение к БД не удалось: '.$a->getMessage();
    }
