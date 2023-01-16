<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="map.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Nunito&family=Oswald:wght@300;400;600&display=swap');</style>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=6ff6e9de-5e49-4e3e-8f1d-f3246d268c04" type="text/javascript"></script>
    <title>Document</title>
</head>
<body>
<header><?php include('header.php'); ?></header>

    <main>
        <div class="window">
            <table>
                <tr>
                    <td>
                        <div id="map-view">
                            <?php require("map.php"); ?>
                        </div>
                    </td>
                    <td>
                        <div class="container">
                            <div class="card">
                                <div class="card-header">
                                    <p>Поиск шума на территории</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" class="form">
                                        <input type="text" class="form-control" id="search" placeholder="Введите адрес">
                                        <button type="button" id="btn_search" class="btn">Поиск</button>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <div id="content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        
    </main>
<script src="/jquery.js"></script>
<script src="/main.js"></script>
</body>
</html>

$claster1 = $result[0];
            $claster2 = $result[1];
            $claster3 = $result[2];
            $claster4 = $result[3];
            $claster5 = $result[4];}
               var claster1 = <?php echo $claster1 ?>;
            var claster2 = <?php echo $claster2 ?>;
            var claster3 = <?php echo $claster3 ?>;
            var claster4 = <?php echo $claster4 ?>;
            var claster5 = <?php echo $claster5 ?>;