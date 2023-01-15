<?php
require("bd.php");
//require("session.php");
if (!empty($_POST)){
    $result = mysqli_query($link, "SELECT * FROM Users WHERE login=\"".$_POST['login']."\"");
    if(mysqli_num_rows($result) == 0){
        mysqli_query($link, "INSERT INTO users (name, login, password) VALUES (
            \"".$_POST["name"]."\", 
            \"".$_POST["login"]."\",
            \"".md5($_POST["password"])."\"
            )"
        );
        function_alert("Something is incorrect...");

    }
}
?>