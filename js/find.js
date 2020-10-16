
$(document).ready(function(){
   
    $('#item_name').keyup(function(){
        var query = $(this).val();   
        
        if(query != ''){
           
            $.ajax({
                url:'action.php',
                type:'POST',
                data:{query:query},
                success:function(data){
                    $('#list_item').fadeIn();
                    $('#list_item').html(data);
                }
            })
        }else{
                     $('#list_item').fadeOut();
                     $('#list_item').html("");
        }
    })

    $(document).on('click','li',function(){
        $('#item_name').val($(this).text());
        $('#list_item').fadeOut();
    })
})