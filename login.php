<?php
include("bd.php");
$login = $_POST['login'];
$password = md5($_POST["password"]);
$query = "SELECT * FROM `Users` WHERE `login` = '".$login."' and password = '".$password."'";
$result = mysqli_query($link, $query);
if(!$result || mysqli_num_rows($result) == 0){
    require("signin.php");?>
        
    <div id="modal_window" style="display:block;">
        Ошибка! Попробуйте авторизоваться ещё раз.<br /><br /><br /><center>
        <input type="button" value="Хорошо" class="btn_modal" onClick="document.getElementById('modal_window').style.display='none'" /></center>
    </div>
    <?php  
}
else{
    $arr =  mysqli_fetch_array($result);
    echo "<script>console.log('Debug Objects: " . $arr['login'] . "' );</script>";
    $password2 = $arr['password']; 
    $login2 = $arr['login']; 
    session_start();
    if ($password == $password2 && $login2 == $login){
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user'] = [
            "id" => $arr['id'],
            "name" => $arr['name'],
            "email" => $arr['email'],
            "login" => $arr['login'],
            "password" => $password
        ];
        header("Location: index.php");  
    }
}
   