$(document).ready(function () {

    $('body').delegate('#enterToInvoice','click',function(e){
        e.preventDefault();
        console.log("enter button work");
    
        if ($('#itm_no').val().trim() == "" || 
            $('#itm_name').val().trim() == "" || 
            $('#qty').val().trim() == "" || 
            $('#price').val().trim() == "" || 
            $('#sup_name').val().trim() == "" ||
            $('#sup_email').val().trim() == ""              
        ) {
         alert('Input field are empty')
        }
         else {
          console.log('its  not empty')
          $.ajax({
            method: 'POST',
            url: 'Action/orderAction.php',
            data: $('#orderForm').serialize(),
            success: function (data) {
              showRows();
              $('#orderMSG').html(data);            
            }
          })
        }
      })

})