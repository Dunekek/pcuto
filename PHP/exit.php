<?php
    require_once('./Database.php');
    $_SESSION['user'] = null;
    header('Location: ../routes.php');
