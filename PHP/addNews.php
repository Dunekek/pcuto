<?php
    require_once('./Database.php');

    var_dump($_FILES);
    var_dump($_POST);

    $FILE = upload_image($_FILES['file'], '../newsImg');

    $query = $pdo->prepare("INSERT INTO `News`(`title`, `description`,  `img`) VALUES (?,?,?)");
    $query->execute(array(
        $_POST['title'],
        $_POST['description'],
        $FILE
    ));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    header('Location: ../admin.php');
