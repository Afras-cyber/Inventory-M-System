<<<<<<< HEAD
$(document).ready(function () {
    $("#item_id").keyup(function () {
        var query = $(this).val();
        if (query != "") {
            $.ajax({
                url: "action.php",
                type: "POST",
                data: {
                    query: query,
                },
                success: function (data) {
                    $("#list_item").fadeIn();
                    $("#list_item").html(data);
                },
            });
        } else {
            $("#list_item").fadeOut();
            $("#list_item").html("");
=======

$(document).ready(function(){
 
    $('#item_id').keyup(function(){
        var query = $(this).val();   
        
        if(query != ''){
            $("#item_add").attr("disabled", false);
            $.ajax({
                url:'Action/action.php',
                type:'POST',
                data:{query:query},
                success:function(data){
                    $('#list_item').fadeIn();
                    $('#list_item').html(data);
                }
            })
        }else{
            $("#item_add").attr("disabled", false);
                     $('#list_item').fadeOut();
                     $('#list_item').html("");
>>>>>>> d06747fb74e36af775cb275174031350925ee268
        }
    });

<<<<<<< HEAD
    $(document).on("click", "li", function () {
        $("#item_id").val($(this).text());
        $("#list_item").fadeOut();
        var id = $("#item_id").val();
        $.ajax({
            method: "POST",
            url: "action.php",
            data: {
                item: id,
            },
            success: function (responseObject) {
                var obj = JSON.parse(responseObject);
                $("#item_name").val(obj.item_name);
                $("#cateory").val(obj.category);
                $("#desc").val(obj.description);
                $("#buy_me").val(obj.buy);
                $("#sell_me").val(obj.sell);
            },
            failure: function () {
                console.log("failed somethin wrong in adding form data");
            },
        });
    });
});
=======
    $(document).on('click','li',function(){
        $('#item_id').val($(this).text());
        $('#list_item').fadeOut();
        // 
        console.log("Item Selected")
      
         var id = $('#item_id').val();
         $("#item_add").attr("disabled", true);
                $.ajax({
                    method: 'POST',
                    url: 'Action/action.php',
                    data: {
                       item: id
                    },
                    success: function( responseObject ) {
                     console.log("Item recevied success")
                       
                        // console.log(responseObject.item_name);
                        var obj = JSON.parse(responseObject);
                    // var name= i['item_name'];
                   
                  
                      
                      $('#item_name').val(obj.item_name);
                      $('#cateory').val(obj.category);
                      $('#desc').val(obj.description);
                      $('#buy_me').val(obj.buy);
                      $('#sell_me').val(obj.sell);
                       
                    },
                    failure: function() {
                       console.log('item Failed')
                       $("#item_add").attr("disabled", false);
                    }
                });       
           
          
               
        // 
    })
   
    
    $('#delete9').click(function(e){     
        var askDelet = confirm('Do you really want delete this Item');
        e.preventDefault();
        if(askDelet==true){
        var itme_id1 = $('#item_id').val();  
        //     alert("true worked"+itme_id1);
            $.ajax({
                method:'POST',
                url:'Action/action.php',
                data:{delete_item:itme_id1},
                success: function( data ) {
                    console.log("Item deleted success");
                    console.log(data);
                    location.reload(true);

                }
                
            })
        }
        else{
            console.log('delete item cancel');
        }      
        
    })
    //---------------------------------------------------------------

    $('#item_add').click(function (e) {
        e.preventDefault();
        console.log('add clicked')
           
        if ($('.itm_input').val().trim() === "") {
            alert('its  empty')
        } else {
            alert('its not empty')
            $.ajax({
                method: 'POST',
                url: 'Action/item_add.php',
                data: $('#itm_frm').serialize(),
                success: function (data) {                    
                        $('#message1').html(data);                    
                }
            })
        }
    })//custEdit
    $('#edit_itm').click(function (e) {
        console.log('edit clicked')
        e.preventDefault();
        console.log('Edit button work')
        if ($('.itm_input').val().trim() === "") {
            alert('Please fill all the field')
        } else {
            console.log("Input fields not empty")
            $.ajax({
                method: 'POST',
                url: 'Action/item_edit.php',
                data: $('#itm_frm').serialize(),
                success: function (data) {
                        $('#message1').html(data);
                }
            })
        }
    })
    
})
// 2VM2255 find.js:38 
// {"item_qid":"12","item_id":"URL434234","item_name":"","category":"","qty":"0","description":"","buy":"0","sell":"0"}

>>>>>>> d06747fb74e36af775cb275174031350925ee268
