$(document).ready(function(){
    document.getElementById("btn_add").onclick = function() {
        var Search = $('#add_sound').val();
        var Noise = $('#select_noise').val();
        var Admarea = $('#select_admarea').val();
        var District = $('#select_district').val();
        var Ses_id = $('#btn_add').val();
        console.log("dfdf"+Search);
        console.log("dfdf"+Noise);
        console.log("dfdf"+Admarea);
        console.log("dfdf"+District);
        var Search_new = Search.replace(/\s/g, '!');
        var Noise_new =  Noise.replace(/\s/g, '!');
        var Admarea_new =  Admarea.replace(/\s/g, '!');
        var District_new =  District.replace(/\s/g, '!');
        $(document).load("mapAdd.php?id=" + Search_new + "&noise=" + Noise_new + "&ses_id=" + Ses_id + "&admarea=" + Admarea_new + "&district=" + District_new);
    }
})