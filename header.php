
<a href="/" class="logo">dream life</a>

<div class="table_menu">
    <table>
        <tr>
            <td><a href="/index.php" >Главная</a></td>
            <td><a href="/index.php" >О нас</a></td>
            <?php 
            if (isset($_SESSION['user'])){ ?>
                <td><a href="/exit.php" >Выйти</a></td>
            <?php }
            else{ ?>
                <td><a href="/signup.php">Регистрация</a></td>
                <td><a href="/signin.php" >Авторизация</a></td>
            <?php } ?>
        </tr>
    </table>
</div>