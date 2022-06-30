<?php
    require_once('./Database.php');
    var_dump($_GET);

    $query = $pdo->prepare("DELETE FROM `Tickets` WHERE `id_ticket`=?");
    $query->execute(array($_GET['ticket']));
    header('Location: ../profile.php');