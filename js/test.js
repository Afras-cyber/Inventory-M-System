// AJAX 
$(document).ready(function(){
   
    $('#input').keyup(function(){
        var query = $(this).val();      
        if(query != ''){
            $.ajax({
                url:'action.php',
                type:'POST',
                data:{query:query},
                success:function(data){
                    $('#countrylist').fadeIn();
                    $('#countrylist').html(data);
                }
            })
        }else{
            $('#countrylist').fadeOut();
                    $('#countrylist').html("");
        }
    })

    $(document).on('click','li',function(){
        $('#input').val($(this).text());
        $('#countrylist').fadeOut();
    })
})