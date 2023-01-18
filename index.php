<?php 
session_start();
?>
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
            <form action="mapAdd.php" method="post">
                <div class="functional">
                    <table>
                        <tr>
                       <td> <a href="/statistic.php" id="statistic" class="statistic">Статистика</a></td>
                            <?php 

                            if (isset($_SESSION['user'])){ 
                                ?>
                                <a href="/addSound.php" id="addSound" class="addSound">Добавить шум</a></td>
                                <a href="/searchOnMap.php" id="searchSound" class="searchSound">Проверить адрес</a></td>
                            <?php }
                            else{ ?>
                                <td><a href="#" class="addSound" type="button" name="addSound" id="addSound"  onClick="document.getElementById('my_window').style.display='block';">Добавить шум</a></td>
                                <td><a href="#" class="searchSound" type="button" name="searchSound" id="searchSound"  onClick="document.getElementById('my_window').style.display='block';">Проверить адрес</a></td>
                            <?php } ?>
                        </tr>
                    </table>
                </div>
            </form>
        <main>
        <footer></footer>
     
        <div id="my_window" style="display:none; width:200px; height:80px; background-color:#FF0000; position:absolute; left:400px; top:200px; border:solid 1px #333333; padding:2px;">
            Ошибка! Попробуйте авторизоваться ещё раз.<br /><br /><br /><center>
        <input type="button" value="X" onClick="document.getElementById('my_window').style.display='none'" /></center>
    </div>
    </body>
</html>