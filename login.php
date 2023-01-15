<?php
session_start();
include("bd.php");
$login = $_POST['login'];
$password = $_POST['password'];
$password = sha1($password);
$query = "SELECT * FROM `Users` WHERE `user_login` = '$login' and user_password = '$password'";
$result = mysqli_query($link, $query);

        $arr =  mysqli_fetch_array($result);
        $password2 = $arr['user_password']; 
		$login2 = $arr['user_login']; 

        
        if ($password == $password2 && $login2 == $login){
            $user = mysqli_fetch_assoc($result);
            $_SESSION['user'] = [
                "id" => $arr['id_user'],
				"name" => $arr['user_name']
            ];

            header('Location: ../smart_home_laba9-10/device_login.php');
       }
	?>