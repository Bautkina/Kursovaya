<div id="map"></div>
<script type="text/javascript">
<?php 
include("bd.php");?>
    ymaps.ready(init); 

    var myMap;
    function init() {

        myMap = new ymaps.Map("map", {
            center: [55.708770, 37.634479], // Координаты центра карты
            zoom: 15 // Маштаб карты
        }); 

        myMap.controls.add(
            new ymaps.control.ZoomControl()  // Добавление элемента управления картой
        ); <?php
        if(isset($_POST["year"])){
            include("bd.php");
            $query = mysqli_query($link, "SELECT * FROM Open_date_sound_".$_POST["year"]."");
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
        }

else{
        include("bd.php");
        $query = mysqli_query($link, "SELECT * FROM Open_date_sound_2017");
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
    }
?>
};
</script>