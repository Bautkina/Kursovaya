<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="sign.css">

        <title>Форма авторизации</title>
    </head>
    <body>
        <header><?php include("header.php"); 

        
        ?></header>
        <main>
        <!-- <button onclick="show('block')">Авать</button>
        <div id="filter" onclick="show('none')"></div>
            <div id="ModalForm"> -->
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
            </div>
        </main>
        <script src = "/modal.js"></script>
    </body>
</html>