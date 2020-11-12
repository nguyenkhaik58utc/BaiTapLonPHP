$(document).ready(function () {
    $
        .ajax({
            url: "/getInformation",
            type: "Get",
            success: function (res) {
                $('#nameUser').val(res[0].nameEmp);
                $('#accountUser').val(res[0].userEmp);
                $('#emailUser').val(res[0].email);
                $('#dateUser').val(res[0].birthday);
                if (res[0].sex == 0)
                    $('#sexUser').val("Nam");
                else
                    $('#sexUser').val("Nữ");
                $('#addressUser').val(res[0].address);
                $('#phoneUser').val(res[0].phone);
            },
            error: function () {
                alert("error getInfor");
            }
        });

    $
        .ajax({
            url: "/getAllDepartment",
            type: "Get",
            success: function (res) {
                data = "";
                for (var i = 0; i < res.length; i++) {
                    data += "<option value='" + res[i].id + "'>" + res[i].nameDep + " </option>"
                }
                $("#lstDepartment").html(data);
            },
            error: function () {
                alert("error get department");
            }
        });

    $
        .ajax({
            url: "/getAllTitle",
            type: "Get",
            success: function (res) {
                data = "";
                for (var i = 0; i < res.length; i++) {
                    data += "<option value='" + res[i].idTitle + "'>" + res[i].nameTitle + " </option>"
                }
                $("#title").html(data);
            },
            error: function () {
                alert("error get title");
            }
        });

    $("#lstDepartment").change(function () {
        var id = $("#lstDepartment").val();
        $('#formTitle').show();
        $
            .ajax({
                url: "/getTitleById",
                type: "Get",
                data: {
                    id: id
                },
                success: function (res) {
                    data = "";
                    for (var i = 0; i < res.length; i++) {
                        data += "<option value='" + res[i].idTitle + "'>" + res[i].nameTitle + " </option>"
                    }
                    $("#lstTitle").html(data);
                },
                error: function () {
                    alert("error get Title");
                }
            });
    });
});


