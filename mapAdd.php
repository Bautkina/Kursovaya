
<?php 
require("bd.php");

    if(isset($_GET["id"]) && $_GET["id"]!=NULL){
        $str = str_replace('!', ' ', $_GET["id"]);
        $noise = str_replace('!', ' ', $_GET["noise"]);
        $admarea = str_replace('!', ' ', $_GET["admarea"]);
        $district = str_replace('!', ' ', $_GET["district"]);
 
        $ch = curl_init('https://geocode-maps.yandex.ru/1.x/?apikey=6ff6e9de-5e49-4e3e-8f1d-f3246d268c04&format=json&geocode=' . urlencode($str));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $res = curl_exec($ch);
        curl_close($ch);
        
        $res = json_decode($res, true);

        $coordinates = $res['response']['GeoObjectCollection']['featureMember'][0]['GeoObject']['Point']['pos'];
        $coordinates = explode(' ', $coordinates);
        $sql1 = "insert into open_date_sound_2023(Location, longitude, latitude, noisecategory, date, user, admarea, district) 
        value ('".$str."', '".$coordinates[0]."', '".$coordinates[1]."', '".$noise."', CURDATE(), ".$_GET["ses_id"]." , '".$admarea."', '".$district."')";
        $result1 = mysqli_query($link, $sql1);
        $sql2 = "insert into open_date_sound(Location, longitude, latitude, noisecategory, date, user, admarea, district) 
        value ('".$str."', '".$coordinates[0]."', '".$coordinates[1]."', '".$noise."', CURDATE(), ".$_GET["ses_id"]." , '".$admarea."', '".$district."')";
        $result2 = mysqli_query($link, $sql2);
        echo '<div id="modal_window2" style="display:block">
        Вы добавили запись в базу данных!<center>
        <input type="button" class="btn_modal" value="Хорошо" onClick="document.getElementById(\'modal_window2\').style.display=\'none\'" /></center>
        </div>';
        
        }
        else{
            echo '<div id="modal_window2" style="display:block">
            Необходимо заполните все строки!<center>
        <input type="button" class="btn_modal" value="Хорошо" onClick="document.getElementById(\'modal_window2\').style.display=\'none\'" /></center>
        </div>';
        }
    ?> 

