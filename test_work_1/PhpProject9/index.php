<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='ru'>
    <head>
        <title>форма регистрации</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css">

    </head>
    <body>
        <form action="chek2.php" method="post">
            <div class="perenos">
                <big>Форма Входа</big>
                    <input type='text' class="from-control" name=' login'
                        id='login' placeholder="Введите имя">
                    <input type='password' class="from-control" name='pass'
                        id='pass' placeholder="Введите фамилию">
                <button class=" batoon" type="submit">Войти</button>
            </div>   
        </form>
        <form action="rgister.php" target="_blank">
            <button class=" batoon" type="submit">Зарегестрироваться</button>
        </form>
        <p>
        <?=$_SESSION['mess']=$_SESSION['mess']?>
        </p>
    </body>
</html>
