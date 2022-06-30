<?php
    require_once('./Database.php');
    var_dump($_GET);

    $query = $pdo->prepare("SELECT * FROM `Users` WHERE `login`=? ");
    $query->execute(
        array(
            $_GET['login'],
        )
    );
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if (!count($result)){
        $query = $pdo->prepare("INSERT INTO `Users`(`login`, `password`, `name`) VALUES (?,?,?)");
        $query->execute(array(
            $_GET['login'],
            $_GET['password'],
            $_GET['name'],
        ));
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        header('Location: ../routes.php');
    } else{
        echo 'Неверные данные';
    }