<div class="row">
                    <div class="col-3"><label class="label">Custmer ID</label><input type="text" class="input_invoice"
                    autocomplete="off" placeholder="CUST002" id ="hmCustID" name="cust_id">
                    <div id="listOfName"></div>
                </div>
                    <div class="col-3"><label class="label">Custmer Name</label><input type="text" autocomplete="off"
                            class="input_invoice" placeholder="Sam" id ="hmCustName" name="cust_name"></div>
                     <div class="col-3"><label class="label">Discount</label><input type="number" class="input_invoice"
                            autocomplete="off" placeholder="LKR 5000"  name="discount"></div>
                  
                    <div class="col-1"><input type="submit" id="enterToInvoice" class="btn btn-lg btn-submit"
                            value="Enter"></div>
                            <div class="col-1"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <script src="js/home.js"></script> -->
        <script>
        $(document).ready(function () {
// $('#hmCustID').keyup(function () {

//     var query = $(this).val();

//     if (query != '') {
//         // $("#enterToInvoice").attr("disabled", false);
//         $.ajax({
//             url: 'Action/hm_custAction.php',
//             type: 'POST',
//             data: { home_nameSelector: query },
//             success: function (data) {
//                 $('#listOfName').fadeIn();
//                 $('#listOfName').html(data);
//             }
//         })
//     } else {
//         // $("#enterToInvoice").attr("disabled", true);
//         $('#listOfName').fadeOut();
//         $('#listOfName').html("");
//     }
// })

// $(document).on('click', 'li', function () {
//     console.log("Name Selected");
//     $('#hmCustID').val($(this).text());
//     $('#listOfName').fadeOut();
//     // 


//     var id = $('#hmCustID').val();
//     //$("#enterToInvoice").attr("disabled", true);
//     $.ajax({
//         method: 'POST',
//         url: 'Action/hm_custAction.php',
//         data: {
//             hm_nameID: id
//         },
//         success: function (responseObject) {
//             console.log("Customer data recevied success")
//             var obj = JSON.parse(responseObject);

//             $('#hmCustName').val(obj.cust_name);

//         },
//         failure: function () {
//             console.log('item fetch Failed')

//         }
//     });
// });

$('#hmCustID').keyup(function (e) {
    //alert("he");
    var query = $(this).val();
    console.log(query)
    if (query != '') {
     // $("#enterToInvoice").attr("disabled", false);
     console.log("check point 1")
      $.ajax({
        url: 'Action/action.php',
        type: 'POST',
        data: { home_nameSelector: query },
        success: function (data) {
            console.log("check point 2")
          $('#listOfName').fadeIn();
          $('#listOfName').html(data);
        }
      })
    } else {
     // $("#enterToInvoice").attr("disabled", true);
     console.log("check point 3")
      $('#listOfName').fadeOut();
      $('#listOfName').html("");
    }
  })

  $(document).on('click', 'li', function () {
    console.log("Name Selected");
    $('#hmCustID').val($(this).text());
    $('#listOfName').fadeOut();
    // 


    var id1 = $('#hmCustID').val();
    //$("#enterToInvoice").attr("disabled", true);
    $.ajax({
      method: 'POST',
      url: 'Action/action.php',
      data: {
        hm_nameID: id1
      },
      success: function (responseObj) {
        console.log("Customer data recevied success")
        var object = JSON.parse(responseObj);
        
        $('#hmCustName').val(object.cust_name);
        
      },
      failure: function () {
        console.log('item fetch Failed')
       
      }
    });
  });

});
        
        
        </script>