<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css_file/index.css">
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
            <form action="mapAdd.php" method="post">
                <div class="functional">
                    <table>
                        <tr>
                            <?php 

                            if (isset($_SESSION['user'])){ 
                                ?>
                                <td> <a href="/statistic.php" id="statistic" class="statistic">Статистика</a></td>
                                <a href="/addSound.php" id="addSound" class="addSound">Добавить шум</a></td>
                                <a href="/searchOnMap.php" id="searchSound" class="searchSound">Проверить адрес</a></td>
                            <?php }
                            else{ ?>
                                <td> <a href="#" id="statistic" class="statistic" onClick="document.getElementById('modal_window').style.display='block';">Статистика</a></td>
                                <td><a href="#" class="addSound" type="button" name="addSound" id="addSound"  onClick="document.getElementById('modal_window').style.display='block';">Добавить шум</a></td>
                                <td><a href="#" class="searchSound" type="button" name="searchSound" id="searchSound"  onClick="document.getElementById('modal_window').style.display='block';">Проверить адрес</a></td>
                            <?php } ?>
                        </tr>
                    </table>
                </div>
            </form>
        <main>
        <footer></footer>
     
        <div id="modal_window" style="display:none">
            Чтобы воспользоваться данными функциями, необходимо авторизоваться!<center>
        <input type="button" class="btn_modal "value="Хорошо" onClick="document.getElementById('modal_window').style.display='none'" /></center>
        </div>
    </body>
</html>