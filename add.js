$(document).ready(function(){
    document.getElementById("btn_add").onclick = function() {
        var Search = $('#add_sound').val();
        var Search_new = Search.replace(/\s/g, '!');
        $(document).load("mapAdd.php?id=" + Search_new);
    }
})