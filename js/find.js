
$(document).ready(function () {
    $("#delete9").attr("disabled", true);
    $("#edit_itm").attr("disabled", true);
    $('#item_id').keyup(function () {
        var query = $(this).val();

        if (query != '') {
            $("#item_add").attr("disabled", false);
            $("#delete9").attr("disabled", true);
            $("#edit_itm").attr("disabled", true);
            $.ajax({
                url: 'Action/action.php',
                type: 'POST',
                data: { query: query },
                success: function (data) {
                    $('#list_item').fadeIn();
                    $('#list_item').html(data);
                }
            })
        } else {
            $("#item_add").attr("disabled", false);
            $("#delete9").attr("disabled", true);
            $("#edit_itm").attr("disabled", true);
            $('#list_item').fadeOut();

            $('#list_item').html("");
        }
    });
    $(window).click(function () {
        $('#list_item').fadeOut();
    });
    $(document).on('click', 'li', function () {
        $('#item_id').val($(this).text());
        $('#list_item').fadeOut();

        console.log("Item Selected")

        var id = $('#item_id').val();
        $("#item_add").attr("disabled", true);
        $("#delete9").attr("disabled", false);
        $("#edit_itm").attr("disabled", false);
        $.ajax({
            method: 'POST',
            url: 'Action/action.php',
            data: {
                item: id
            },
            success: function (responseObject) {
                console.log("Item recevied success")

                // console.log(responseObject.item_name);
                var obj = JSON.parse(responseObject);
                // var name= i['item_name'];



                $('#item_name').val(obj.item_name);
                $('#cateory').val(obj.category);
                $('#quty').val(obj.qty);
                $('#desc').val(obj.description);
                $('#buy_me').val(obj.buy);
                $('#sell_me').val(obj.sell);

            },
            failure: function () {
                console.log('item Failed')
                $("#item_add").attr("disabled", false);
                $("#delete9").attr("disabled", true);
                $("#edit_itm").attr("disabled", true);
            }
        });



        // 
    })


    $('#delete9').click(function (e) {
        var askDelet = confirm('Do you really want delete this Item');
        e.preventDefault();
        if (askDelet == true) {
            var itme_id1 = $('#item_id').val();
            //     alert("true worked"+itme_id1);
            $.ajax({
                method: 'POST',
                url: 'Action/action.php',
                data: { delete_item: itme_id1 },
                success: function (data) {
                    console.log("Item deleted success");
                    console.log(data);
                    location.reload(true);

                }

            })
        }
        else {
            console.log('delete item cancel');
        }

    })
    //---------------------------------------------------------------

    $('#item_add').click(function (e) {
        e.preventDefault();
        console.log('add clicked')

        if ($('.itm_input').val().trim() === "") {
            console.log('its  empty')
        } else {
            console.log('its not empty')
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
