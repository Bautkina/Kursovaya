<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="index.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Nunito&family=Oswald:wght@300;400;600&display=swap');</style>
        <title>Главная</title>
    </head>
    <body>
        <header><?php include("header.php")?></header>
        <main>
            <div class="text">
                <p class="h1">Live comfortably
                <p class="h2" >Поможем вам абстрагироваться от шума в Москве
            </div>
            <form action="map.php" method="post">
                <div class="functional">
                    <table>
                        <tr>
                            <td><input class="addSound" type="submit" name="addSound" id="addSound"  value="Добавить шум"></td>
                            <td><input class="statistic" type="submit" name="statistic" id="statistic"  value="Статистика"></td>
                            <td><input class="sourceSound" type="submit" name="sourceSound" id="sourceSound"  value="Проверить адрес"></td>
                        </tr>
                    </table>
                </div>
            </form>
        <main>
        <footer></footer>
    </body>

</html>