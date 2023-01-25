
<a href="/" class="logo">not noise</a>

<div class="table_menu">
    <table>
        <tr>
            <td><a href="/index.php" >Главная</a></td>
            <td><a href="#" onClick="document.getElementById('modal_about').style.display='block';">О нас</a></td>
            <?php 
            if (isset($_SESSION['user'])){ ?>
                <td><a href="/exit.php" >Выйти</a></td>
                <td><a href="/account.php" >Профиль</a></td>

            <?php }
            else{ ?>
                <td><a href="/signup.php">Регистрация</a></td>
                <td><a href="/signin.php" >Авторизация</a></td>
            <?php } ?>
        </tr>
    </table>
</div>
<div id="modal_about" style="display:none">
    <p>Рано или поздно приходит время, когда приходится выбирать жильё. Все мы хотим жить в комфортных условиях,  чтобы ничто не отвлекало от повседневных дел. <br>
    <p>Данный проект поможет вам проверить адрес на наличие мешающих неприятных звуков , а также рядом находящиеся обнаруженные шумы.
    Вы можете заглянуть в статистику и определить, в каком месте Москвы стоит начать искать квартиру. <br>
    <p>Мы будем вам очень благодарны, если при обнаружении мешающих вам шумов, вы добавите их в нашу базу данных!<br>
    <p>Данные взяты из https://data.mos.ru/opendata/2449/
        <center>
    <input type="button" class="btn_modal "value="Хорошо" onClick="document.getElementById('modal_about').style.display='none'" /></center>
</div>