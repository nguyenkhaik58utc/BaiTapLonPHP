$(document).ready(function () {
    $
        .ajax({
            url: "/sumSalary",
            type: "Get",
            success: function (res) {
                data = "";
                data += "<h2>Lương Tháng " + res.mon + "</h2>"
                    + "<div class='row' style='font-size:26px;margin-top:50px'>"
                    + "<div class='col-md-3'>"
                    + "<p>Số ngày làm việc : </p></div>"
                    + "<div class='col-md-9'>" + Math.round(res.numberDayWork * 100) / 100 + "</div></div>";
                data += "<div class='row' style='font-size:26px;margin-top:50px'>"
                    + "<div class='col-md-3'>"
                    + "<p>Tổng giờ làm lý thuyết : </p></div>"
                    + "<div class='col-md-9'>" + Math.round(res.numberTimeWorkLT * 100) / 100 + "</div></div>";
                data += "<div class='row' style='font-size:26px;margin-top:50px'>"
                    + "<div class='col-md-3'>"
                    + "<p>Tổng giờ làm thực tế : </p></div>"
                    + "<div class='col-md-9'>" + Math.round(res.numberTimeWorkTT * 100) / 100 + "</div></div>";
                data += "<div class='row' style='font-size:26px;margin-top:50px'>"
                    + "<div class='col-md-3'>"
                    + "<p>Tổng giờ làm ngoài giờ : </p></div>"
                    + "<div class='col-md-9'>" + Math.round(res.numberTimeOT * 100) / 100 + "</div></div>";
                data += "<div class='row' style='font-size:26px;margin-top:50px'>"
                    + "<div class='col-md-3'>"
                    + "<p>Tổng lương : </p></div>"
                    + "<div class='col-md-9'>" + Math.round(res.totalSalary * 100) / 100 + "</div></div>";
                $("#numberSalary").html(data);
            },
            error: function () {
                alert("error sum salary");
            }
        });
});


