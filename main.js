$(document).ready(function(){
    $('#search').keyup(function(){
        var Search = $('#search').val();
        
        if(Search!=""){
            $.ajax(
                {
                    url: '/search.php', 
                    method:'POST', 
                    data:{search:Search}, 
                    success:function (data){

                        $('#content').html(data);

                    }
                }
            )
        }
        else{
            $('#content').html('');
        }
        $(document).on('click', 'a', function(){
            $('#search').val($(this).text());
            $('#content').html('');
        })
    })

    document.getElementById("btn_search").onclick = function() {
        var Search = $('#search').val();
        var Search_new = Search.replace(/\s/g, '!');
        $("#map-view").load("map.php?id=" + Search_new);
     
        $.ajax(
            {
                url: '/list.php', 
                method:'POST', 
                data:{search:Search}, 
                success:function (data){
                    console.log(data);
                    $('#content').html(data);
                }
            }
        )
    }
})