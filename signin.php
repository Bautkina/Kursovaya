<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css_file/sign.css">
        <title>Форма авторизации</title>
    </head>
    <body>
        <header><?php include("header.php");?></header>
        <main>
            <div class="container">
                <form action="login.php" method="POST" class="form">
                <h1 class="title">Авторизация</h1>
                    <div class="form_in">
                        <img class="login-icon" src="picture/login.svg" alt="">
                        <input type="text" name="login" id="login" placeholder="Введите логин" class="login_signin">
                    </div>
                    <div class="form_in">
                        <img class="password-icon" src="picture/password.svg" alt="">
                        <input type="password" name="password" id="password" placeholder="Введите пароль" class="password_signin">
                    </div>    
                        <button type="submit" class="signin">Войти</button>
                </form>
            </div>
       
        </main>
    </body>
</html>