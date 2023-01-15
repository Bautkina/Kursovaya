<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = ''; 
$database = 'Kursovaya';
$link = mysqli_connect($db_host, $db_user, $db_password, $database);
if ($link == False) {
    die("Cannot connect DB");
}
?>
