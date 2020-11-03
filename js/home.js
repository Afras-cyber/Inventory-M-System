
// Get the modal

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function () {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
$(document).ready(function () {

  showRows();

 


  $('#item_no').keyup(function () {
    var query = $(this).val();

    if (query != '') {
      // $("#enterToInvoice").attr("disabled", false);
      $.ajax({
        url: 'Action/action.php',
        type: 'POST',
        data: { home_itemSelector: query },
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
    $('#item_no').val($(this).text());
    $('#listOfItem').fadeOut();
    // 


    var id = $('#item_no').val();
    // $("#enterToInvoice").attr("disabled", true);
    $.ajax({
      method: 'POST',
      url: 'Action/action.php',
      data: {
        hm_ItemID: id
      },
      success: function (responseObject) {
        console.log("Item data recevied success")
        var obj = JSON.parse(responseObject);
        // console.log(obj.item_name)
        $('#itm_name').val(obj.item_name);
        $('#itm_qty').val(obj.qty);
        var jm = parseFloat(obj.qty);
        var km = parseFloat(obj.sell);
        var tm = jm * km;

        // console.log(obj.sell);
        // $('#item_price').val(obj.sell);
        $('#item_price').val(tm);

      },
      failure: function () {
        console.log('item fetch Failed')
        // $("#enterToInvoice").attr("disabled", false);
      }
    });
  });

  $("#itm_qty").change(function () {
    console.log("check point 1");
    var item_id = $('#item_no').val();
    console.log(item_id);
    if (item_id != '') {
      $.ajax({
        url: 'Action/action.php',
        type: 'POST',
        data: { changeqty: item_id },
        success: function (data) {
          console.log("check point 2");
          console.log(data);
          var j = $('#itm_qty').val();
          var qty = parseFloat(j);
          var echPrice = parseFloat(data);
          var total = qty * echPrice;
          console.log(total);
          $("#item_price").val(total);
         

        }
      })
    } else {
      console.log("check point 3");
      var msg = "<p style='color:red;'>Item Id empty</p>";
      $('#message01').val(msg);
    }


  });

  $('body').delegate('#enterToInvoice','click',function(e){
    e.preventDefault();
    console.log("enter button work");

    if ($('#item_no').val().trim() == "" || 
        $('#discount').val().trim() == "" || 
        $('#itm_name').val().trim() == "" || 
        $('#itm_qty').val().trim() == "" || 
        $('#item_price').val().trim() == "" ||
        $('#cust_name').val().trim() == "" || 
        $('#custEmail').val().trim() == ""  
          
    ) {
     alert('Input field are empty')
    }
     else {
      console.log('its  not empty')
      $.ajax({
        method: 'POST',
        url: 'Action/hm_action.php',
        data: $('#form_invoice').serialize(),
        success: function (data) {
          showRows();
          $('#message01').html(data);
          $('#item_no').val("");
          $('#discount').val("");
          $('#itm_name').val("");
          $('#itm_qty').val("");
          $('#item_price').val("");        }
      })
    }
  })

  $('body').delegate('#rm_list','click',function(e){
       e.preventDefault();  
       var tid = $(this).attr('tid');     
       $.ajax({
         method: 'POST',
         url: 'Action/action.php',
         data: { rm_list:1,tid:tid },
         success: function (data) {
           $('#message01').html(data);
           showRows();
         }
       })
     })
   
  
  function showRows(){
    
    $.ajax({
      method: 'POST',
      url: 'Action/action.php',
      data: { showRows: 1 },
      success: function (data) {
        $('#rowOfInvoice').html(data);
        showTotal();
      }
    })
  }
  function showTotal(){
    $.ajax({
      method: 'POST',
      url: 'Action/action.php',
      data: { showTotal: 1 },
      success: function (data) {
        $('#total-price').html(data);
        
      }
    })
  }
  $('body').delegate('#clearAllTable','click',function(e){
    e.preventDefault();   
    $.ajax({
      method: 'POST',
      url: 'Action/action.php',
      data: { clearAllTable:1},
      success: function (data) {
        $('#message01').html(data);
        showRows();
      }
    })
  })
  // $('body').delegate('#printDoc','click',function(e){
  //   alert(0);
  //   e.preventDefault();  
  //   $.ajax({
  //     method: 'POST',
  //     url: 'File/print.php',
  //     data: { printDoc:1},
  //     success: function (data) {
  //       $('#message01').html(data);
  //       //showRows();
  //     }
  //   })
  // })



  //--------------------------bottom-------------------------------------------
});