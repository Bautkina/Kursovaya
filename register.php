<?php
require("bd.php");

if (!empty($_POST)){
    $result = mysqli_query($link, "SELECT * FROM Users WHERE login=\"".$_POST['login']."\" and password=\"".md5($_POST["password"])."\"");

    if(mysqli_num_rows($result) == 0){
        mysqli_query($link, "INSERT INTO users (name, lastname, login, password, birth) VALUES (
            \"".$_POST["name"]."\", 
              \"".$_POST["lastname"]."\", 
            \"".$_POST["login"]."\",
            \"".md5($_POST["password"])."\",
            \"".$_POST["date"]."\"
            )"
        );
        
        header("Location: index.php");      
    }
    else{
        require("signup.php");
        ?>
        <div id="modal_window" style="display:block">Такой пользователь уже существует!<br /><br /><br /><center>
        <input type="button" value="Хорошо" class="btn_modal" onClick="document.getElementById('modal_window').style.display='none'" /></center>
    </div>
    <?php
    }
}
?>