<?php
session_start();
include("bd.php");
$login = $_POST['login'];
$password = $_POST['password'];
// $password = sha1($password);
$query = "SELECT * FROM `Users` WHERE `login` = '".$login."' and password = '".$password."'";
$result = mysqli_query($link, $query);

    $arr =  mysqli_fetch_array($result);
    echo "<script>console.log('Debug Objects: " . $arr['login'] . "' );</script>";
    $password2 = $arr['password']; 
    $login2 = $arr['login']; 

    if ($password == $password2 && $login2 == $login){
        $_SESSION["user"] = mysqli_fetch_assoc($result);
        include("index.php");
    }
?>