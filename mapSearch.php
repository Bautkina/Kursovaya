
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

        $str = str_replace('!', ' ', $_GET["id"]);
        $query = mysqli_query($link, "SELECT * FROM Open_date_sound where Location = '".$str."'");
        while ($result = mysqli_fetch_assoc($query)){
            $latitude = $result["latitude"];
            $longitude = $result["longitude"];?>
            var long = <?php echo $longitude ?>;
            var lat = <?php echo $latitude ?>;
            myMap.setCenter([lat, long],15);
            <?php 
                $query1 = mysqli_query($link, "SELECT * FROM Open_date_sound_2022 
                WHERE (latitude < ".$latitude." + 0.08 and latitude > ".$latitude." - 0.08) and 
                (longitude < ".$longitude." + 0.08 and longitude > ".$longitude." - 0.08);");
                while ($result = mysqli_fetch_assoc($query1)){
                    $latitude = $result["latitude"];
                    $longitude = $result["longitude"];?>
                    var long = <?php echo $longitude ?>;
                    var lat = <?php echo $latitude ?>;
            

            myPlacemark = new ymaps.Placemark([lat, long], 
            {balloonContent: '<?php echo $result['Location']; ?>'}, 
            {preset: "twirl#darkblueDotIcon"});

            myMap.geoObjects.add(myPlacemark);
        <?php 
                }
        }
    }
    else{
        include("bd.php");
        $query = mysqli_query($link, "SELECT * FROM Open_date_sound_2022");
        while ($result = mysqli_fetch_assoc($query)){
            $latitude = $result["latitude"];
            $longitude = $result["longitude"];?>
            var long = <?php echo $longitude ?>;
            var lat = <?php echo $latitude ?>;
            myPlacemark = new ymaps.Placemark([lat, long], 
            {balloonContent: '<?php echo $result['Location']; ?>'}, 
            {preset: "twirl#darkblueDotIcon"});

            myMap.geoObjects.add(myPlacemark);
            <?php 
        }
    } ?> 
};
</script>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=6ff6e9de-5e49-4e3e-8f1d-f3246d268c04" type="text/javascript"></script>
