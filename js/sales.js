$(document).ready(function(){
 
    // showSales();

    $('body').delegate('#rmFromSales','click',function(e){
      e.preventDefault();  
      var sid = $(this).attr('sid');     
      $.ajax({
        method: 'POST',
        url: 'Action/action.php',
        data: { rmFromSales:1,sid:sid },
        success: function (data) {
          $('#msg1').html(data);
          showSales();
        }
      })
    })
  
    $('body').delegate('#datePicker','click',function(e){
      e.preventDefault();  
      $.ajax({
        method: 'POST',
        url: 'Action/selectday.php',
        data: $('#selectDay').serialize(),
        success: function (data) {
          
          $('#salesTable').html(data);
         
        }
      })
    })
  



    function showSales(){
        $.ajax({
            method: 'POST',
            url: 'Action/action.php',
            data: { showSales: 1 },
            success: function (data) {
              $('#salesTable').html(data);
              
            }
          })
    }
  
})