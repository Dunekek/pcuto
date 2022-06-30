<?php
    require_once('./Database.php');

    if (!$user) header('Location: ./login.php');

    var_dump($_GET);

    $query = $pdo->prepare("SELECT COUNT(id_ticket) as tickets FROM `Tickets` 
    join Flights on Flights.id_flight=Tickets.id_flight
    WHERE Flights.id_flight=?");
    $query->execute(array($_GET['id']));
    $ticketsAll = $query->fetch()['tickets'];

    $query = $pdo->prepare("SELECT * FROM Flights
    JOIN Planes on Planes.id_plane=Flights.id_plane
    WHERE Flights.id_flight=?");
   $query->execute(array($_GET['id']));
    $maxTickets = $query->fetchAll(PDO::FETCH_ASSOC)[0]['seats_count'];
  
    if ((int)$ticketsAll+1 > (int)$maxTickets ){
       
    } else{
       $query = $pdo->prepare("INSERT INTO `Tickets`( `id_user`, `id_flight`, `passport`, `passenger_name`) VALUES (?,?,?,?)");
       $query->execute(array(
        $user['id_user'],
        $_GET['id'],
        $_GET['passport'],
        $_GET['fio'],
       ));
       $result = $query->fetchAll(PDO::FETCH_ASSOC);
       echo 1;
       header('Location: ../profile.php');
    }

    var_dump($result);
   

