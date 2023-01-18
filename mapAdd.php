
<div id="map"></div>
<script type="text/javascript">
<?php 
include("bd.php");

    ?>
ymaps.ready(init); 

var myMap;
function init() {

    myMap = new ymaps.Map("map", {
        center: [55.708770, 37.634479], // Координаты центра карты
        zoom: 15 // Маштаб карты
    }); 

    myMap.controls.add(
        new ymaps.control.ZoomControl()  // Добавление элемента управления картой
    ); 
    <?php 
    if(isset($_GET["id"])){
        

        include("bd.php");
        $str = str_replace('!', ' ', $_GET["id"]);
 
        $ch = curl_init('https://geocode-maps.yandex.ru/1.x/?apikey=6ff6e9de-5e49-4e3e-8f1d-f3246d268c04&format=json&geocode=' . urlencode($str));
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
        $sql1 = "insert into open_date_sound_2022(Location, longitude, latitude) value ('".$str."', '".$coordinates[0]."', '".$coordinates[1]."' )";
        $result1 = mysqli_query($link, $sql1);


        $query = mysqli_query($link, "SELECT * FROM Open_date_sound_2022 where latitude='".$coordinates[1]."' and longitude='".$coordinates[0]."'");
        while ($result = mysqli_fetch_assoc($query)){
            $latitude = $result["latitude"];
            $longitude = $result["longitude"];?>
            var long = <?php echo $longitude ?>;
            var lat = <?php echo $latitude ?>;
            myMap.setCenter([lat, long],15);

            myPlacemark = new ymaps.Placemark([lat, long], {}, {  // Координаты метки объекта
                preset: "twirl#darkblueDotIcon" // Тип метки
            });

            myMap.geoObjects.add(myPlacemark);
        <?php 
        }
    }
    else{
        include("bd.php");
        $query = mysqli_query($link, "SELECT * FROM Open_date_sound_2022 ");
        while ($result = mysqli_fetch_assoc($query)){
            $latitude = $result["latitude"];
            $longitude = $result["longitude"];?>
            var long = <?php echo $longitude ?>;
            var lat = <?php echo $latitude ?>;
            myPlacemark = new ymaps.Placemark([lat, long], {}, {  // Координаты метки объекта
                preset: "twirl#darkblueDotIcon" // Тип метки
            });

            myMap.geoObjects.add(myPlacemark);
            <?php 
        }
    } ?> 
};
</script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=6ff6e9de-5e49-4e3e-8f1d-f3246d268c04" type="text/javascript"></script>
