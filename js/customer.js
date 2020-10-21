
$(document).ready(function(){
 
    $('#cust_uid').keyup(function(){
        var query = $(this).val();   
        
        if(query != ''){
           
            $.ajax({
                url:'action.php',
                type:'POST',
                data:{cutomer_select:query},
                success:function(data){
                    $('#list_item').fadeIn();
                    $('#list_item').html(data);
                }
            })
        }else{
                     $('#list_item').fadeOut();
                     $('#list_item').html("");
        }
    })

    $(document).on('click','li',function(){
        $('#cust_uid').val($(this).text());
        $('#list_item').fadeOut();
        // 
        console.log("Item Selected")
      
         var id = $('#cust_uid').val();
                $.ajax({
                    method: 'POST',
                    url: 'action.php',
                    data: {
                       custom_id: id
                    },
                    success: function( responseObject ) {
                     console.log("Item recevied success")
                       
                        // console.log(responseObject.item_name);
                        var obj = JSON.parse(responseObject);
                    // var name= i['item_name'];
                   
                  
                      
                      $('#cust_name').val(obj.cust_name);
                      $('#contect').val(obj.contect_no);
                      $('#address1').val(obj.address);
                      $('#address2').val(obj.address2);
                      $('#email_id').val(obj.email);
                     
                       
                    },
                    failure: function() {
                       console.log('Item Failed')
                    }
                });       
           
          
               
        // 
    })
   
    
    $('#deleteCustomer').click(function(e){     
        var askDelet = confirm('Do you really want delete this Item ?');
        e.preventDefault(); 
        if(askDelet==true){
        var cust_uid = $('#cust_uid').val();  
        //     alert("true worked"+itme_id1);
            $.ajax({
                method:'POST',
                url:'action.php',
                data:{customer_delete:cust_uid},
                success: function( data ) {
                    console.log("Item deleted success");
                    console.log(data);
                    location.reload(true);

                }
                
            })
        }
        else{
            console.log('Delete item cancel');
        }      
        
    })
})
// 2VM2255 find.js:38 
// {"item_qid":"12","item_id":"URL434234","item_name":"","category":"","qty":"0","description":"","buy":"0","sell":"0"}

