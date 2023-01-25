<?php
session_start();
include("bd.php");
if($_POST["password"] == NULL && $_POST["login"] == NULL && $_POST["email"] == NULL && $_POST["name"] == NULL){
    header("Location: update_account.php");  ?>
    <?php  
}
else{
    if ($_POST["name"] != NULL){
        $query = "update Users set name = '".$_POST["name"]."' 
        where login='".$_SESSION["user"]["login"]."' and password='".$_SESSION["user"]["password"]."'";
        $result = mysqli_query($link, $query);
    }
    if ($_POST["email"] != NULL){
        $query = "update Users set email = '".$_POST["email"]."' 
        where login='".$_SESSION["user"]["login"]."' and password='".$_SESSION["user"]["password"]."'";
        $result = mysqli_query($link, $query);
    }
    if ($_POST["login"] != NULL){
        $query = "update Users set login = '".$_POST["login"]."' 
        where login='".$_SESSION["user"]["login"]."' and password='".$_SESSION["user"]["password"]."'";
        $result = mysqli_query($link, $query);
    }
    if ($_POST["password"] != NULL){
        $password = md5($_POST["password"]);
        $query = "update Users set password = '".$password."' 
        where login='".$_SESSION["user"]["login"]."' and password='".$_SESSION["user"]["password"]."'";
        $result = mysqli_query($link, $query);
    }
    include("exit.php");
}

?>
   