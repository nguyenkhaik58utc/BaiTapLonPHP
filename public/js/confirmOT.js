var current = new Date();
var month = current.getMonth() + 1;
var year = current.getFullYear();

function convertDate(data) {
    var getdate = parseInt(data.replace("/Date(", "").replace(")/", ""));
    var ConvDate = new Date(getdate);
    var month = parseInt(ConvDate.getMonth()) + 1;
    return ConvDate.getFullYear() + "/" + month + "/" + ConvDate.getDate();
}

$(document)
    .ready(
        function () {
            $("#select_all").change(function () { // "select all"
                // change

                $(".checkbox").each(function () {
                    if ($("#select_all").is(':checked') == false) {
                        $(this).prop('checked', false); // change all
                        // ".checkbox"
                        // checked
                        // status
                    } else {
                        $(this).prop('checked', true);
                    }
                });
            });
            $
                .ajax({
                    url: "/getAllRegistration",
                    type: "Get",
                    data: {
                        month: month,
                        year: year
                    },

                    success: function (res) {
                        var data = "";
                        for (var i = 0; i < res.length; i++) {
                            var status;
                            if (res[i].statusId == 1) {
                                status = "Đã duyệt";
                            } else {
                                if (res[i].statusId == 3) {
                                    status = "Chờ duyệt";
                                } else status = "Bị hủy";
                            }
                            if (res[i].statusId == 1
                                || res[i].statusId == 2) {
                                data += "<tr><td></td><td hidden>"
                                    + res[i].id
                                    + "</td><td  >"
                                    + res[i].nameEmp
                                    + "</td><td>"
                                    + res[i].registrationDate
                                    + "</td><td>"
                                    + res[i].timeStart
                                    + "</td><td>"
                                    + res[i].timeFinish
                                    + "</td><td>"
                                    + res[i].reason
                                    + "</td><td>"
                                    + res[i].reasonForCancel
                                    + "</td><td>"
                                    + status
                                    + "</td><td></td></tr>";

                            } else {
                                data += "<tr><td><div class='checkbox'>"
                                    + "<label> <input class='checkbox check_id' data-id='"
                                    + res[i].id
                                    + "' type='checkbox' name='check[]'>"
                                    + "</label>"
                                    + "</div></td><td hidden>"
                                    + res[i].id
                                    + "</td><td>"
                                    + res[i].nameEmp
                                    + "</td><td>"
                                    + res[i].registrationDate
                                    + "</td><td>"
                                    + res[i].timeStart
                                    + "</td><td>"
                                    + res[i].timeFinish
                                    + "</td><td>"
                                    + res[i].reason
                                    + "</td><td>"
                                    + res[i].reasonForCancel
                                    + "</td><td>"
                                    + status
                                    + "</td><td><button type='button' class='btn btn-outline-danger'"
                                    + " data-target='#myModalAdd1'  onclick=functionEdit()"
                                    + " data-toggle='modal' >Hủy</button></td></tr>";
                            }
                        }
                        $('#allRegistration').html(data);
                    },
                    error: function () {
                        swal("Error", "Your imaginary file is safe :)", "error");
                    }

                });
        });

function PagitrationByMonth(id, index) {
    if (month == 1 && id == 'PreviousByMonth') {
        year = year - 1;
        month = 12;
    } else if (month == 12 && id == 'NextByMont') {
        year = year + 1;
        month = 1;
    } else {
        month += parseInt(index);
        year;
    }
    $
        .ajax({
            url: '/PagingByMonthConfirm',
            type: "Get",
            data: {
                temp: temp,
                month: month,
                year: year
            },
            success: function (res) {
                var data = "";
                for (var i = 0; i < res.length; i++) {
                    var status;
                    if (res[i].statusId == 1) {
                        status = "Đã duyệt";
                    } else {
                        if (res[i].statusId == 3) {
                            status = "Chờ duyệt";
                        } else status = "Bị hủy";
                    }
                    if (res[i].statusId == 1
                        || res[i].statusId == 2) {
                        data += "<tr><td></td><td hidden>"
                            + res[i].id
                            + "</td><td  >"
                            + res[i].nameEmp
                            + "</td><td>"
                            + res[i].registrationDate
                            + "</td><td>"
                            + res[i].timeStart
                            + "</td><td>"
                            + res[i].timeFinish
                            + "</td><td>"
                            + res[i].reason
                            + "</td><td>"
                            + res[i].reasonForCancel
                            + "</td><td>"
                            + status
                            + "</td><td></td></tr>";

                    } else {
                        data += "<tr><td><div class='checkbox'>"
                            + "<label> <input class='checkbox check_id' data-id='"
                            + res[i].id
                            + "' type='checkbox' name='check[]'>"
                            + "</label>"
                            + "</div></td><td hidden>"
                            + res[i].id
                            + "</td><td>"
                            + res[i].nameEmp
                            + "</td><td>"
                            + res[i].registrationDate
                            + "</td><td>"
                            + res[i].timeStart
                            + "</td><td>"
                            + res[i].timeFinish
                            + "</td><td>"
                            + res[i].reason
                            + "</td><td>"
                            + res[i].reasonForCancel
                            + "</td><td>"
                            + status
                            + "</td><td><button type='button' class='btn btn-outline-danger'"
                            + " data-target='#myModalAdd1'  onclick=functionEdit()"
                            + " data-toggle='modal' >Hủy</button></td></tr>";
                    }
                }
                $('#allRegistration').html(data);
                $('#table').load();

            },
            error: function () {
                alert("error");
            }
        });
}

function functionEdit() {
    var table = document.getElementById('table');
    for (var i = 0; i < table.rows.length; i++) {
        table.rows[i].onclick = function name() {
            document.getElementById('otId').value = this.cells[1].innerHTML;
        };
    }
};

function cancelRegistration() {
    var a = document.getElementById("otId").value;
    var b = document.getElementById("reasonForCancel").value;

    if (b != "") {

        $.ajax({
            url: "/RefuseRegistration",
            type: "Get",
            data: {
                otId: a,
                reasonForCancel: b
            },
            success: function (data) {
                localStorage.setItem("swal",
                    swal({
                        title: "Success!",
                        text: "Message sent",
                        type: "success",
                        timer: 800,
                        showConfirmButton: false
                    })
                    );
                window.setTimeout(function () {
                    location.reload();
                }, 800);
            },
            error: function () {
                swal("Error", "Your imaginary file is safe :)", "error");
            }
        });
    } else
        alert("hãy nhập lý do");
}

function Submit() {
    var arrId = new Array();
    $(".check_id:checked").each(function (i) {
        arrId[i] = $(this).attr("data-id");
    });
    $.ajax({
        url: "/SubmitRegistration",
        type: "Get",
        data: {
            arrId: arrId
        },
        success: function (res) {
            localStorage.setItem("swal",
                swal({
                    title: "Success!",
                    text: "Message sent",
                    type: "success",
                    timer: 800,
                    showConfirmButton: false
                })
                );
            window.setTimeout(function () {
                location.reload();
            }, 800);
        },
        error: function () {
            swal("Lỗi!", "Vui lòng chon trước khi Submit :)", "error");
        }
    });
}


//tim kiem
temp = 0;

function functionSearchOT(statusId) {
    month = current.getMonth() + 1;
    $
        .ajax({
            url: '/SearchConfirm',
            type: "Get",
            data: {
                statusId: statusId,
                month: month,
                year: year
            },
            success: function (res) {
                var data = "";
                for (var i = 0; i < res.length; i++) {
                    var status;
                    if (res[i].statusId == 1) {
                        status = "Đã duyệt";
                    } else {
                        if (res[i].statusId == 3) {
                            status = "Chờ duyệt";
                        } else status = "Bị hủy";
                    }
                    if (res[i].statusId == 1
                        || res[i].statusId == 2) {
                        data += "<tr><td></td><td hidden>"
                            + res[i].id
                            + "</td><td  >"
                            + res[i].nameEmp
                            + "</td><td>"
                            + res[i].registrationDate
                            + "</td><td>"
                            + res[i].timeStart
                            + "</td><td>"
                            + res[i].timeFinish
                            + "</td><td>"
                            + res[i].reason
                            + "</td><td>"
                            + res[i].reasonForCancel
                            + "</td><td>"
                            + status
                            + "</td><td></td></tr>";

                    } else {
                        data += "<tr><td><div class='checkbox'>"
                            + "<label> <input class='checkbox check_id' data-id='"
                            + res[i].id
                            + "' type='checkbox' name='check[]'>"
                            + "</label>"
                            + "</div></td><td hidden>"
                            + res[i].id
                            + "</td><td>"
                            + res[i].nameEmp
                            + "</td><td>"
                            + res[i].registrationDate
                            + "</td><td>"
                            + res[i].timeStart
                            + "</td><td>"
                            + res[i].timeFinish
                            + "</td><td>"
                            + res[i].reason
                            + "</td><td>"
                            + res[i].reasonForCancel
                            + "</td><td>"
                            + status
                            + "</td><td><button type='button' class='btn btn-outline-danger'"
                            + " data-target='#myModalAdd1'  onclick=functionEdit()"
                            + " data-toggle='modal' >Hủy</button></td></tr>";
                    }
                }
                $('#allRegistration').html(data);
                $('#table').load();
            },
            error: function () {
                swal("Error", "Get Registration for Search", "error");
            }
        });
}

