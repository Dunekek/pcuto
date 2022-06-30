<?php
    require_once('./Database.php');

    $query = $pdo->prepare("DELETE FROM `News` WHERE `id_news`=?");
    $query->execute(array($_GET['id']));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    header('Location: ../news.php');