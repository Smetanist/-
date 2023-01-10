<?php
    $ser_ip = "127.0.0.1";
    $ser_name = "root";
    $ser_p = "";
    $ser_db = "recipes_base";

    $dsn = 'mysql:host=' . $ser_ip . ';dbname=' . $ser_db . ';charset=utf8;';

    $database = new PDO($dsn, $ser_name, $ser_p);

    //Поиск по заголовкам и содержимому
    if(!$database) {

        echo "Ошибка при подключении базы данных!";
    }

    
?>