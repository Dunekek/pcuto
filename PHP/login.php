<?php
    require_once('./Database.php');
    var_dump($_GET);

    $query = $pdo->prepare("SELECT * FROM `Users` WHERE `login`=? and `password`=?");
    $query->execute(
        array(
            $_GET['login'],
            $_GET['password'],
        )
    );
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if (count($result)){
        $_SESSION['user'] = $result[0];
        header('Location: ../routes.php');
    } else{
        echo 'Неверные данные';
    }