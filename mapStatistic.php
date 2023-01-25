<?php 
include("bd.php");
include("infoStatistic.php");?>
<div id="map"></div>
<script type="text/javascript">
    ymaps.ready(init); 

    var myMap;
    function init() {

        myMap = new ymaps.Map("map", {
            center: [55.708770, 37.634479], 
            zoom: 10 
        }); 

        myMap.controls.add(
            new ymaps.control.ZoomControl()  
        ); <?php
        if(isset($_POST["year"])){
            $query2 = mysqli_query($link, "select id_center from date_".$_POST["year"]." group by id_center;");
            $array = Array();
            while($result = mysqli_fetch_array($query2))
            {
                $array[] = $result['id_center'];
            }
            // echo "<script>console.log('Debug Objects: " . $array[1] . "' );</script>";
            $claster1 = $array[0];
            $claster2 = $array[1];
            $claster3 = $array[2];
            $claster4 = $array[3];
            $claster5 = $array[4];
            ?>

            var claster1 = <?php echo $claster1 ?>;
            var claster2 = <?php echo $claster2 ?>;
            var claster3 = <?php echo $claster3 ?>;
            var claster4 = <?php echo $claster4 ?>;
            var claster5 = <?php echo $claster5 ?>;
           

            
            <?php
            $query = mysqli_query($link, "SELECT * FROM date_".$_POST["year"]."");
            while ($result = mysqli_fetch_assoc($query)){
                $latitude = $result["latitude"];
                $longitude = $result["longitude"];
                $id_center = $result["id_center"];
                
                ?>
                var long = <?php echo $longitude ?>;
                var lat = <?php echo $latitude ?>;
                var center = <?php echo $id_center ?>;
                
                var max_claster = <?php echo $max_claster ?>;
                var max_2_claster = <?php echo $max_2_claster ?>;
                var max_3_claster = <?php echo $max_3_claster ?>;
                var max_4_claster = <?php echo $max_4_claster ?>;
                var min_claster = <?php echo $min_claster ?>;
                
                    if (center == max_claster){
                        myPlacemark = new ymaps.Placemark([lat, long], {}, {  // Координаты метки объекта
                            preset: "islands#redDotIcon"  
                        });
                    }
                    else if (center == max_2_claster){
                        myPlacemark = new ymaps.Placemark([lat, long], {}, {  // Координаты метки объекта
                            preset: "islands#blueDotIcon"  
                        });
                    }
                    else if (center == max_3_claster){
                        myPlacemark = new ymaps.Placemark([lat, long], {}, {  // Координаты метки объекта
                            preset: "islands#yellowDotIcon"  
                        });
                    }
                    else if (center == max_4_claster){
                        myPlacemark = new ymaps.Placemark([lat, long], {}, {  // Координаты метки объекта
                            preset: "islands#pinkDotIcon"  
                        });
                    }
                    else if (center == min_claster){
                        myPlacemark = new ymaps.Placemark([lat, long], {}, {  // Координаты метки объекта
                            preset: "islands#greenDotIcon"  
                        });
                    }
                
                
                myMap.geoObjects.add(myPlacemark);
    <?php
            }
        }

else{
        include("bd.php");
        $query = mysqli_query($link, "SELECT * FROM date_2022");
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