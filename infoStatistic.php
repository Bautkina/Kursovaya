<?php
require_once 'bd.php';

if(isset($_POST["year"])){
    $year = $_POST['year'];
    // $sql = "select * from date_".$year."";
    // $result = mysqli_query($link, $sql);
    $count_sound = "select count(id_center) as countSound, id_center from date_".$year." group by id_center order by count(District) DESC;";
    $result = mysqli_query($link, $count_sound);
    $array_count = Array();
    while($row = mysqli_fetch_assoc($result)){
        // echo '<div class="list_result">';
        // echo '<div class="data"> result: '.$row['countSound'].'</div>';
        // echo '</div>';
        $array_count[] = $row['countSound'];
        $array_claster[] = $row['id_center'];
    }

    $max = $array_count[0];
    $max_2 = $array_count[1];
    $max_3 = $array_count[2];
    $max_4 = $array_count[3];
    $min = $array_count[4];

    $max_claster = $array_claster[0];
    $max_2_claster = $array_claster[1];
    $max_3_claster = $array_claster[2];
    $max_4_claster = $array_claster[3];
    $min_claster = $array_claster[4];
}
?> 
