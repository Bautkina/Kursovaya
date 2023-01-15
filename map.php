	<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=6ff6e9de-5e49-4e3e-8f1d-f3246d268c04" type="text/javascript"></script>
        <title>Document</title>
    </head>
    <body>
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
            include("bd.php");
            $query = mysqli_query($link, "SELECT * FROM Open_date_sound limit 2");
            while ($result = mysqli_fetch_assoc($query)){
                $latitude = $result["latitude"];
                $longitude = $result["longitude"];
        ?>
        var long = <?php echo $longitude ?>;
        var lat = <?php echo $latitude ?>;
        myPlacemark = new ymaps.Placemark([lat, long], {}, {  // Координаты метки объекта
            preset: "twirl#darkblueDotIcon" // Тип метки
        });

        myMap.geoObjects.add(myPlacemark);
        <?php 
            }
        ?>
		
	};
</script>
    </body>
    </html>