<?php
require_once 'bd.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $search = $_POST['search'];
    $sql = "select * from open_date_sound_2016 where Location like '%".$search."%'";
    $result = mysqli_query($link, $sql);

    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="list_result">';
        echo '<div class="data"> Дата возникновения: '.$row['Date'].'</div>';
        echo '<div class="data"> Административный округ: '.$row['AdmArea'].'</div>';
        echo '<div class="data"> Район: '.$row['District'].'</div>';
        echo '<div class="data"> Адрес: '.$row['Location'].'</div>';
        echo '<div class="data"> Источник шума: '.$row['NoiseCategory'].'</div>';
        echo '</div>';
    } 
}
?> 
