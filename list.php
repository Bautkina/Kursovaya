<?php
require_once 'bd.php';


if($_SERVER['REQUEST_METHOD']=='POST'){
    $search = $_POST['search'];
    $sql = "select * from open_date_sound where Location like '%".$search."%'";
    $result = mysqli_query($link, $sql);
    
    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="list_result">';
        echo '<div class="data"> Дата возникновения: '.$row['Date'].'</div>';
        echo '<div class="data"> Адрес: '.$row['Location'].'</div>';
        echo '<div class="data"> Источник шума: '.$row['NoiseCategory'].'</div>';
        echo '</div>';
    }

}

?> 
