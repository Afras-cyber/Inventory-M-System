
$(document).ready(function(){
 
    $('#sup_uid').keyup(function(){
        var query = $(this).val();   
        
        if(query != ''){
            $("#sup_addBtn").attr("disabled", false);
            $.ajax({
                url:'Action/action.php',
                type:'POST',
                data:{supplier_select:query},
                success:function(data){
                    $('#list_supplier').fadeIn();
                    $('#list_supplier').html(data);
                }
            })
        }else{
            $("#sup_addBtn").attr("disabled", false);
                     $('#list_supplier').fadeOut();
                     $('#list_supplier').html("");
        }
    })

    $(document).on('click','li',function(){
        $('#sup_uid').val($(this).text());
        $('#list_supplier').fadeOut();
        // 
        console.log("supplier Selected")
      
         var id = $('#sup_uid').val();
         $("#sup_addBtn").attr("disabled", true);
                $.ajax({
                    method: 'POST',
                    url: 'Action/action.php',
                    data: {
                       supplier_id: id
                    },
                    success: function( responseObject ) {
                     console.log("Supplier details recevied successfuly")
                       
                        // console.log(responseObject.item_name);
                        var obj = JSON.parse(responseObject);
                    // var name= i['item_name'];
                   
                  
                      
                      $('#sup_name').val(obj.sup_name);//1
                      $('#contect').val(obj.contect_no);//2
                      $('#addrsss1').val(obj.address);//3
                      $('#addrsss2').val(obj.address2);//4
                      $('#email_id').val(obj.email);//5
                     
                       
                    },
                    failure: function() {
                       console.log('Supplier details recevie Failed')
                       $("#sup_addBtn").attr("disabled", false);
                    }
                });       
           
          
               
        // 
    })   
    
    $('#deleteSupplier').click(function(e){     
        var askDelet = confirm('Do you really want delete this Item ?');
        e.preventDefault(); 
        if(askDelet==true){
        var sup_uid = $('#sup_uid').val();           
            $.ajax({
                method:'POST',
                url:'Action/action.php',
                data:{supplier_delete:sup_uid},
                success: function( data ) {
                    console.log("supplier details deleted successfuly");
                    console.log(data);
                    location.reload(true);
                }                
            })
        }
        else{
            console.log('supplier details delete cancel');
        }  
    })
    $('#sup_addBtn').click(function (e) {
        e.preventDefault();
        alert("add");            
        if ($('.sup_in').val().trim() === "") {
            alert('Please fill all the field')
        } else {
            alert('its not empty')
            $.ajax({
                method: 'POST',
                url: 'Action/supplier_add_action.php',
                data: $('#supplier_form').serialize(),
                success: function (data) {                    
                        $('#message1').html(data);                    
                }
            })
        }
    })//custEdit
    $('#sup_editBtn').click(function (e) {      
        e.preventDefault();
        console.log('Edit button work')
        if ($('.sup_in').val().trim() === "") {
            alert('Please fill all the field')
        } else {
            console.log("Input fields not empty")
            $.ajax({
                method: 'POST',
                url: 'Action/supplier_edit_action.php',
                data: $('#supplier_form').serialize(),
                success: function (data) {
                        $('#message1').html(data);
                }
            })
        }
    })
})


