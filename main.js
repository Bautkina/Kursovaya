$(document).ready(function(){
    $('#search').keyup(function(){
        var Search = $('#search').val();
        
        if(Search!=""){
            $.ajax(
                {
                    url: '/Kursovaya/search.php', 
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
                url: '/Kursovaya/list.php', 
                method:'POST', 
                data:{search:Search}, 
                success:function (data){
                    console.log(data);
                    $('#content').html(data);
                }
            }
        )
        // $.ajax({
        //     url: '/Kursovaya/map.php',
        //     method:'POST', 
        //             data:{search:Search}, 
        //             success:function (data){
        //             $('#map-viev').html(data);
        //             console.log(data);
                   
        //     }
        // });
       
        
    }
})