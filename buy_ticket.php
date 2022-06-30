<?php
  require('./PHP/Database.php');

  if (!$user) header('Location: ./login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<form style="position: relative; margin-top: 30px " action="./PHP/addTicket.php">
<input type="hidden" name="id" value="<?=  $_GET['id'];?>">
  <h2 style="text-align: center; margin-bottom: 30px">Покупка билета</h2>
  <div class="form-group row" style="margin-bottom: 30px">
    <label for="staticEmail" class="col-sm-2 col-form-label">Номер паспорта</label>
    <div class="col-sm-10">
    <input name="passport" type="text" placeholder="Номер паспорта" class="form-control" id="inputPassword" >
    </div>
  </div>
  <div class="form-group row" style="margin-bottom: 30px">
    <label for="inputPassword" class="col-sm-2 col-form-label">ФИО Пассажира</label>
    <div class="col-sm-10">
      <input name="fio" type="text" placeholder="ФИО" class="form-control" id="inputPassword" >
    </div>
    <button style="position: relative;margin-top: 30px ;max-width: 280px; left: 50%; transform: translateX(-50%)">Оформить</button>
  </div>
</form>
</body>


<style>
    form{
        max-width: 700px;
        margin: 0 auto;
        padding: 30px 20px;
        background: #c0c0c0
    }

    button{
        margin-top: 30px;
    }
</style>
</html>