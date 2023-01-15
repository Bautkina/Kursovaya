<?php
require_once 'bd.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Search = $_POST['search'];
    $sql = "select * from open_date_sound_2016 where Location like '%".$Search."%'";
    $result = mysqli_query($link, $sql);

    if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result)){
            echo '<a href="#" class="list">'.$row['Location'].'</a>';
        }
    }
    else{
        echo '<p>Record Not Found</p>';
    }
}