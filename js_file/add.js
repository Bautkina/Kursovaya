$(document).ready(function(){
    document.getElementById("btn_add").onclick = function() {
        var Search = $('#add_sound').val();
        var Noise = $('#select_noise').val();
        var District = $('#select_district').val();
        var Ses_id = $('#btn_add').val();
        var Search_new = Search.replace(/\s/g, '!');
        var Noise_new =  Noise.replace(/\s/g, '!');
        var District_new =  District.replace(/\s/g, '!');
        $("#map-view").load("mapAdd.php?id=" + Search_new + "&noise=" + Noise_new + "&ses_id=" + Ses_id + "&district=" + District_new);
    }
})