<?php
// $db_host = 'localhost';
// $db_user = 'root';
// $db_password = ''; 
// $database = 'Kursovaya';

$db_host = 'std-mysql';
$db_user = 'std_1967_kursovaya';
$db_password = 'Wowayf6!!!'; 
$database = 'std_1967_kursovaya';

$link = mysqli_connect($db_host, $db_user, $db_password, $database);
if ($link == False) {
    die("Cannot connect DB");
}
?>
