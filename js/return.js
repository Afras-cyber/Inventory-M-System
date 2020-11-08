
$(document).ready(function () {
    showUndo();
  
    $('#item_no').keyup(function () {
        var query = $(this).val();
    
        if (query != '') {
           
            $.ajax({
                url: 'Action/returnAction.php',
                type: 'POST',
                data: { item_select: query },
                success: function (data) {
                    $('#list_item').fadeIn();
                    $('#list_item').html(data);
                   
                }
            })
        } else {
           
            $('#list_item').fadeOut();
            $('#list_item').html("");
        }
    })
    $(window).click(function () {
        $('#list_item').fadeOut();
    });
    $(document).on('click', 'li', function () {
        $('#item_no').val($(this).text());
        $('#list_item').fadeOut();
         console.log("Item Selected")

        var id = $('#item_no').val();
      
        $.ajax({
            method: 'POST',
            url: 'Action/returnAction.php',
            data: {
                returnItem_id: id
            },
            success: function (responseObject) {
                console.log("Item data recevied success")
                var obj = JSON.parse(responseObject);
                $('#item_name').val(obj.item_name);
                $('#category').val(obj.category);
            },
            failure: function () {
                console.log('Item fetch Failed')
               
            }
        });
    })

   

    $('#addItem').click(function (e) {
        e.preventDefault();
        if ($('#item_no').val().trim() === "" ||
            $('#item_name').val().trim() === "" ||
            $('#category').val().trim() === "" ||
            $('#qty').val().trim() === "" ||
            $('#reason').val().trim() === "" 
     ) {
        // $("#addItem").attr("disabled", true);
        alert('Input field are empty')
        } else {
           console.log('btn click');
            $.ajax({
                method: 'POST',
                url: 'Action/returnAdd.php',
                data: $('#form').serialize(),
                success: function (data) {                    
                        $('#message').html(data);                    
                }
            })
        }
    })   
    
    $('body').delegate('#undo_recover','click',function(e){
        e.preventDefault(); 
        var undo = $(this).attr('undo');  
        
            $.ajax({
              method: 'POST',
              url: 'Action/returnAction.php',
              data: { undo_recover:1,undo:undo},
              success: function (responseObject1) {
                console.log("Item data recevied success")
                var obj1 = JSON.parse(responseObject1);
                $('#item_no').val(obj1.item_uid);
                $('#item_name').val(obj1.item_name);
                $('#category').val(obj1.category);
                $('#qty').val(obj1.qty);
                $('#reason').val(obj1.reason);
                $("#undo_recover").attr("disabled", true);
            },
            })            
        
      })
       function showUndo(){
        if ( $('#undo_recover').attr('undo') == '' ) {
            $("#undo_recover").attr("disabled", true);
        } else {
            $("#undo_recover").attr("disabled", false);
        }
       }  
    
})

