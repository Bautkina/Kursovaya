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

    $(document).on('click', '#btn_search', function(){
        var Search = $('#search').val();
     
        $.ajax(
            {
                url: '/Kursovaya/wow.php', 
                method:'POST', 
                data:{search:Search}, 
                success:function (data){
                    console.log('f');

                    $('#content').html(data);
                }
            }
        )
    })
})