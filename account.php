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
            <form class="form">
                    <?php echo '<h1>Личная информация</h1>' ?>
                    <?php echo 'Идентификатор: '.$_SESSION["user"]["id"].'<br>'; ?>
                    <?php echo 'Имя: '.$_SESSION["user"]["name"].'<br>'; ?>
                    <?php echo 'Фамилия: '. $_SESSION["user"]["lastname"].'<br>'; ?>
                    <?php echo 'День рождение: '. $_SESSION["user"]["birth"].'<br>'; ?>

                    <center><a href="/update_account.php" id="update" class="update">Изменить данные</a></td></center>
            </form>
        <main>
        <footer></footer>
    </body>
</html>