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
    // alert("he");
    var query0 = $(e.target.id).val();

    if (query0 != '') {
     // $("#enterToInvoice").attr("disabled", false);
      $.ajax({
        url: 'Action/action.php',
        type: 'POST',
        data: { home_nameSelector: query0 },
        success: function (data) {
          $('#listOfName').fadeIn();
          $('#listOfName').html(data);
        }
      })
    } else {
     // $("#enterToInvoice").attr("disabled", true);
      $('#listOfName').fadeOut();
      $('#listOfName').html("");
    }
  })

  $(document).on('click', 'li', function (e) {
    console.log("Name Selected");
    $('#hmCustID').val($(e.target.id).text());
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