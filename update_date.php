<?php
session_start();
include("bd.php");
$password = md5($_POST["password"]);
$query = "update Users set `login` = '".$_POST["login"]."', password = '".$password."', name = '".$_POST["name"]."', lastname='".$_POST["lastname"]."' 
where login='".$_SESSION["user"]["login"]."' and password='".$_SESSION["user"]["password"]."'";
$result = mysqli_query($link, $query);
if(!$result){
    require("update_account.php");?>
        
    <div id="modal_window" style="display:block;">
        Ошибка! Заполните все данные.<br /><br /><br /><center>
        <input type="button" value="Хорошо" class="btn_modal" onClick="document.getElementById('modal_window').style.display='none'" /></center>
    </div>
    <?php  
}
else{
    require("exit.php");
    require("sign.php");
    ?>
    <div id="modal_window" style="display:block;">
    Ошибка! Заполните все данные.<br /><br /><br /><center>
    <input type="button" value="Хорошо" class="btn_modal" onClick="document.getElementById('modal_window').style.display='none'" /></center>
</div>
<?php
    }
?>
   