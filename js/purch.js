$(document).ready(function(){
 
    showPur();

    $('body').delegate('#rmFromOrder','click',function(e){
      e.preventDefault();  
      var pid = $(this).attr('pid');     
      $.ajax({
        method: 'POST',
        url: 'Action/orderAction.php',
        data: { rmFromOrder:1,pid:pid },
        success: function (data) {
          $('#msg1').html(data);
          showPur();
        }
      })
    })
  
    $('body').delegate('#datePicker','click',function(e){
      e.preventDefault();
      var i = $('#datePicker').val();
      $.ajax({
        method: 'POST',
        url: 'Action/selectday2.php',
        data: {selectDay:1,i:i},
        success: function (data) {          
          $('#purch').html(data);
         
        }
      })
    })
  


    function showPur(){
        $.ajax({
            method: 'POST',
            url: 'Action/orderAction.php',
            data: { showAll: 1 },
            success: function (data) {
                $('#purch').html(data);
              
            }
          })
    }
  
})