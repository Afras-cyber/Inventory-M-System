$(document).ready(function(){
       $('#login').click(function (e) {
        e.preventDefault();
       
          
        if ($('.lg_input').val().trim() === "") {
            alert('Email or Password field empty please check again')
        } else {
         //   alert('its not empty')
            $.ajax({
                method: 'POST',
                url: 'Action/index_action.php',
                data: $('#lg_form').serialize(),
                success: function (data) {                    
                        $('#message3').html(data);                    
                }
            })
        }
    })

})