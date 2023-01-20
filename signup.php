<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css_file/sign.css">

        <title>Форма авторизации</title>
    </head>
    <body>
        <header><?php include("header.php"); ?></header>
        <main>
            <form action="register.php" method="POST" class="form">
                <h1 class="title">Регистрация</h1>
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
                    <button type="submit" class="signup" id="signup">Зарегистрировать</button>
            </form>      
        </main>
    </body>
</html>