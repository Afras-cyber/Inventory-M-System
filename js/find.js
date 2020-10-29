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
        }
    });

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