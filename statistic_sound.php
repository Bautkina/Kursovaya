<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="map.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Nunito&family=Oswald:wght@300;400;600&display=swap');</style>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=6ff6e9de-5e49-4e3e-8f1d-f3246d268c04" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header><?php include('header.php'); ?></header>
<main>
<table>
    <tr>
        <td>
            <div id="map-view2">
                <?php require("mapStatistic.php"); ?>
            </div>
        </td>
        <td class = "info_statistic1">
            <form method="POST" class="form_statistic">
                <p class="statistic_title">Получите статистику за год</p> 
                <input type="radio" name="year" id="year" value="2016" />2016 <br>
                <input type="radio" name="year" id="year" value="2017" />2017 <br>
                <input type="radio" name="year" id="year" value="2018" />2018 <br>
                <input type="radio" name="year" id="year" value="2019" />2019 <br>
                <input type="radio" name="year" id="year" value="2020" />2020 <br>
                <input type="radio" name="year" id="year" value="2021" />2021 <br>
                <input type="radio" name="year" id="year" value="2022" />2022 <br>
                <button type="submit" id="btn_year" class="btn_year">Выбрать</button>
            </form>
</td><td>
            <?php 
                if(isset($_POST["year"])){
                    echo '<div class="info_statistic2">';
                    echo '<p class="statistic_title">Статистика за '.$_POST["year"].'</p>';
                    echo '<div class="data"> Самое малое кол-во шумов: '.$min.' было зафисировано на территории, котороая обозначена зелёным</div>';
                    echo '<div class="data"> На территории, которая выделена голубым было зафиксировано: '.$max_2.' шумов</div>';
                    echo '<div class="data"> На территории, которая выделена жёлтым было зафиксировано: '.$max_3.' шумов</div>';
                    echo '<div class="data"> На территории, которая выделена розовым было зафиксировано: '.$max_4.' шумов</div>';
                    echo '<div class="data"> Самое большое кол-во шумов: '.$max.' было зафисировано на территории, котороая обозначена красным</div>';
                    echo '</div>';
                }
        ?>
        </td>
    </tr>
</table></main>
<footer></footer>
<script src="/jquery.js"></script>
<script src="/main.js"></script>
</body>
</html>