<?php 

if(isset($_POST["search"])){
    $address = 'Москва, Тверская, д.7';
 
    $ch = curl_init('https://geocode-maps.yandex.ru/1.x/?apikey=6ff6e9de-5e49-4e3e-8f1d-f3246d268c04&format=json&geocode=' . urlencode($address));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $res = curl_exec($ch);
    curl_close($ch);
    
    $res = json_decode($res, true);

    $coordinates = $res['response']['GeoObjectCollection']['featureMember'][0]['GeoObject']['Point']['pos'];
    $coordinates = explode(' ', $coordinates);
    print_r($coordinates[0]);
    print_r($coordinates[1]);

    $search = $_POST['search'];
    $sql = "insert into open_date_sound_2022(Location) value (".$search.")";
    $result = mysqli_query($link, $sql);

    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="list_result">';
        echo '<div class="data"> Дата возникновения: '.$row['Location'].'</div>';
        echo '</div>';
    }   
}
    ?>
    ?>