$(document).ready(function(){
    document.getElementById("btn_add").onclick = function() {
        var Search = $('#add_sound').val();
        var Noise = $('select').val();
        var Search_new = Search.replace(/\s/g, '!');
        var Noise_new =  Noise.replace(/\s/g, '!');
        $(document).load("mapAdd.php?id=" + Search_new + "&noise=" + Noise_new);
    }
})