<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css_file/sign.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Nunito&family=Oswald:wght@300;400;600&display=swap');</style>
        <title>Профиль пользователя</title>
    </head>
    <body>
        <header><?php include("header.php")?></header>
        <main>
        <form action="update_date.php" method="POST" class="form">
                <h1 class="title">Изменение данных</h1>
                <div class="form_in">
                    <input type="text" name="name" id="name" placeholder="Введите имя" class="name">
                    </div>
                <div class="form_in">
                    <input type="text" name="lastname" id="lastname" placeholder="Введите фамилию" class="lastname">
                    </div>
                <div class="form_in">
                    <input type="text" name="login" id="login" placeholder="Введите логин" class="login">
                    </div>
                <div class="form_in">
                    <input type="password" name="password" id="password" placeholder="Введите пароль" class="password">
                    </div>
                    <center><button type="submit" class="signup" id="signup">Изменить данные</button></center>
            </form>      
        <main>
        <footer></footer>
    </body>
</html>
   