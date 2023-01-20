<?php
require_once 'bd.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Search = $_POST['search'];
    $sql = "select * from open_date_sound where Location like '%".$Search."%' limit 5";
    $result = mysqli_query($link, $sql);
    echo '<div class="list_group">';
    if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result)){
            echo '<div class="list_elem"><a href="#" class="list">'.$row['Location'].'</a></div>';
        }
    }
    else{
        echo '<p>Record Not Found</p>';
    }
    echo '</div>';
}
