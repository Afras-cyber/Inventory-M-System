$(document).ready(function () {

    showRows();
    
  $('#itm_no').keyup(function () {
    var query = $(this).val();
    if (query != '') {
      // $("#enterToInvoice").attr("disabled", false);
      $.ajax({
        url: 'Action/orderAction.php',
        type: 'POST',
        data: { order_itemSelector: query },
        success: function (data) {
          $('#listOfItem').fadeIn();
          $('#listOfItem').html(data);
        }
      })
    } else {
      // $("#enterToInvoice").attr("disabled", true);
      $('#listOfItem').fadeOut();
      $('#listOfItem').html("");
    }
  })
  $(window).click(function () {
    $('#listOfItem').fadeOut();
});

  $(document).on('click', 'li', function () {
    console.log("Item Selected");
    $('#itm_no').val($(this).text());
    $('#listOfItem').fadeOut();
    var id = $('#itm_no').val();
       $.ajax({
        method: 'POST',
        url: 'Action/orderAction.php',
        data: {
        order_ItemID: id
      },
      success: function (responseObject) {
        console.log("Item data recevied success")
        var obj = JSON.parse(responseObject);
         $('#itm_name').val(obj.item_name);
     
      },
      failure: function () {
        console.log('item fetch Failed')       
      }
    });
  });

//------------------------------------------------------------------------------------------------
    $('body').delegate('#addOrder','click',function(e){
        e.preventDefault();
        console.log("enter button work");
    
        if ($('#itm_no').val().trim() == "" || 
            $('#itm_name').val().trim() == "" || 
            $('#qty').val().trim() == "" ||             
            $('#sup_name').val().trim() == "" ||
            $('#sup_email').val().trim() == ""              
        ) {
         alert('Input field are empty')
        }
         else {
          console.log('its  not empty')
          $.ajax({
            method: 'POST',
            url: 'Action/order_add.php',
            data: $('#orderForm').serialize(),
            success: function (data) {              
              $('#orderMSG').html(data); 
              showRows(); 
              $('#itm_no').val("")  
              $('#itm_name').val("")
              $('#qty').val("")           
            }
          })
        }
      })
      //---------------------------------------------------------------
      function showRows(){    
        $.ajax({
          method: 'POST',
          url: 'Action/orderAction.php',
          data: { showRows: 1 },
          success: function (data) {
            $('#orderTable').html(data);            
          }
        })
      }

      
  $('body').delegate('#delrow','click',function(e){
    e.preventDefault();  
    var oid = $(this).attr('oid');     
    $.ajax({
      method: 'POST',
      url: 'Action/orderAction.php',
      data: { delrow:1,oid:oid },
      success: function (data) {
        $('#orderMSG').html(data); 
        showRows();   
      }
    })
  })

  $('body').delegate('#emptyTable','click',function(e){
    e.preventDefault();     
    $.ajax({
      method: 'POST',
      url: 'Action/orderAction.php',
      data: { emptyTable:1 },
      success: function (data) {
        $('#orderMSG').html(data); 
        showRows();   
      }
    })
  })

})