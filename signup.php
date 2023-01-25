<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css_file/sign.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Nunito&family=Oswald:wght@300;400;600&display=swap');</style>

        

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
                    <input type="email" name="email" id="email" placeholder="Введите почту" class="email">
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