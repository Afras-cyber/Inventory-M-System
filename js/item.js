
$(document).ready(function () {

    $('#cust_uid').keyup(function () {
        var query = $(this).val();

        if (query != '') {
            $("#custAddBtn").attr("disabled", false);
            $.ajax({
                url: 'Action/action.php',
                type: 'POST',
                data: { cutomer_select: query },
                success: function (data) {
                    $('#list_item').fadeIn();
                    $('#list_item').html(data);
                }
            })
        } else {
            $("#custAddBtn").attr("disabled", false);
            $('#list_item').fadeOut();
            $('#list_item').html("");
        }
    })

    $(document).on('click', 'li', function () {
        $('#cust_uid').val($(this).text());
        $('#list_item').fadeOut();
        // 
        console.log("customer Selected")

        var id = $('#cust_uid').val();
        $("#custAddBtn").attr("disabled", true);
        $.ajax({
            method: 'POST',
            url: 'Action/action.php',
            data: {
                custom_id: id
            },
            success: function (responseObject) {
                console.log("customer data recevied success")

                // console.log(responseObject.item_name);
                var obj = JSON.parse(responseObject);
                // var name= i['item_name'];



                $('#cust_name').val(obj.cust_name);
                $('#contect').val(obj.contect_no);
                $('#address1').val(obj.address);
                $('#address2').val(obj.address2);
                $('#email_id').val(obj.email);


            },
            failure: function () {
                console.log('customer fetch Failed')
                $("#custAddBtn").attr("disabled", false);
            }
        });



        // 
    })


    $('#deleteCustomer').click(function (e) {
        var askDelet = confirm('Do you really want delete this Item ?');
        e.preventDefault();
        if (askDelet == true) {
            var cust_uid = $('#cust_uid').val();
            //     alert("true worked"+itme_id1);
            $.ajax({
                method: 'POST',
                url: 'Action/action.php',
                data: { customer_delete: cust_uid },
                success: function (data) {
                    console.log("customer data deleted success");
                    console.log(data);
                    location.reload(true);

                }

            })
        }
        else {
            console.log('fail to delete');
        }

    })

    //---------------------------------------------------------------

    $('#custAddBtn').click(function (e) {
        e.preventDefault();
        
           
        if ($('.custAdd').val().trim() === "") {
            alert('its  empty')
        } else {
            alert('its not empty')
            $.ajax({
                method: 'POST',
                url: 'Action/customer_add.php',
                data: $('#form').serialize(),
                success: function (data) {                    
                        $('#message1').html(data);                    
                }
            })
        }
    })//custEdit
    $('#custEditBtn').click(function (e) {
       
        e.preventDefault();
        console.log('Edit button work')
        if ($('.custAdd').val().trim() === "") {
            alert('Please fill all the field')
        } else {
            console.log("Input fields not empty")
            $.ajax({
                method: 'POST',
                url: 'Action/customer_edit.php',
                data: $('#form').serialize(),
                success: function (data) {
                        $('#message1').html(data);
                }
            })
        }
    })
})

