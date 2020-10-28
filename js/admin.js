$(document).ready(function () {

    $('#addNewAdmin').click(function (e) {
        e.preventDefault();

        if ($('.adduser').val().trim() === "") {
            alert('its  empty')
        } else {
            alert('its not empty')
            $.ajax({
                method: 'POST',
                url: 'Action/admin_action.php',
                data: $('#adAdmin').serialize(),
                success: function (data) {
                    $('#message1').html(data);

                }

            })
        }
    })
    $('#fgotpwd').click(function (e) {
        e.preventDefault();

        if ($('.checkUser').val().trim() === "") {
            alert('its  empty')
        } else {
            console.log('its not empty');
            $.ajax({
                method: 'POST',
                url: 'Action/forgotpwd_action.php',
                data: $('#fgotpwdfm').serialize(),
                success: function (data) {
                    $('#message2').html(data);

                }

            })
        }
    })
    
})
