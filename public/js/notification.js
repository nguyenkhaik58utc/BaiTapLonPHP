function getNotification() {
    $
        .ajax({
            url: "/getNotification",
            type: "Get",
            success: function (data) {
                db = ""
                for (var i = 0; i < data.length; i++) {
                    if (data[i].isChecked == 1) {
                        db += "<a href='" + data[i].url + "'>" + data[i].nameUser + data[i].content + "</a><hr> "
                    } else
                        db += "<a style='color: red' href='" + data[i].url + "' onclick='setChecked(" + data[i].id +")' >" + data[i].nameUser + data[i].content + "</a><hr> "
                }
                $("#dataNotification").html(db);
            },
            error: function () {
                swal("Error", "Change Registration False", "error");
            }

        });
}

function setChecked(id) {
    $
        .ajax({
            url: "/setChecked",
            type: "Get",
            data: {
                id: id,
            },
            success: function (data) {

            },
            error: function () {
            }

        });
}
