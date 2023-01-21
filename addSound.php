<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_file/map.css">
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
                            <?php include("mapAdd.php"); ?>
                        </div>
                    </td>
                    <td>
                        <div class="container">
                            <div class="card">
                                <div class="add_header">
                                    <p class="title_add">Добавьте адрес шума</p>
                                </div>
                                <div class="add_body">
                                    <form class="form">
                                        <input type="text" class="form-control" name="add_sound" id="add_sound" placeholder="Введите адрес">
                                
                                        <select id="select_noise" name="select_noise">
                                        <?php 
                                        require("bd.php");
                                        $query1 = mysqli_query($link, "SELECT distinct noisecategory FROM open_date_sound;");
                                        while ($result = mysqli_fetch_assoc($query1)){
                                            echo '<option value="'.$result['noisecategory'].'" class="option">'.$result['noisecategory'].'</option>';
                                        }?> 
                                        </select>

                                        <select id="select_admarea" name="select_admarea">
                                        <?php
                                        $query2 = mysqli_query($link, "SELECT distinct admarea FROM open_date_sound;");
                                        while ($result = mysqli_fetch_assoc($query2)){
                                            echo '<option value="'.$result['admarea'].'" class="option">'.$result['admarea'].'</option>';
                                        }
                                        ?>
                                        </select>

                                        <select id="select_district" name="select_district">
                                        <?php
                                        $query3 = mysqli_query($link, "SELECT distinct district FROM open_date_sound;");
                                        while ($result = mysqli_fetch_assoc($query3)){
                                            echo '<option value="'.$result['district'].'" class="option">'.$result['district'].'</option>';
                                        }
                                        ?>
                                         </select>

                                        <button type="button"  onClick="document.getElementById('modal_window').style.display='block';" value="<?php echo $_SESSION["user"]["id"] ?>" id="btn_add" class="btn" >Добавить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div id="modal_window" style="display:none">
        Нужно обязательно ввести все данные!<center>
        <input type="button" class="btn_modal "value="Хорошо" onClick="document.getElementById('modal_window').style.display='none';" /></center>
    </div>
    </main>
    <script src="/js_file/jquery.js"></script>
    <script src="/js_file/add.js"></script>
</body>
</html>