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
                    $('#formSex').val("Nam");
                else
                    $('#formSex').val("Nữ");
                $('#addressUser').val(res[0].address);
                $('#phoneUser').val(res[0].phone);
                $('#departmentUser').val(res[0].nameDep);
                $('#titleUser').val(res[0].nameTitle);
                document.getElementById("imgAvatar").src = res[0].image;
            },
            error: function () {
                alert("error getInformation");
            }
        });

});

function changeInformation() {
    var employeeName = document.getElementById("nameUser").value;
    var userEmp = document.getElementById("accountUser").value;
    var emailEmp = document.getElementById("emailUser").value;
    var dateOfBirth = document.getElementById("dateUser").value;
    var sex = $("#sexUser").val();

    var addressEmp = document.getElementById("addressUser").value;
    var phoneNumber = document.getElementById("phoneUser").value;

    if (employeeName != "") {

        $.ajax({
            url: "/Employee/ChangeInformation",
            type: "Get",
            data: {
                employeeName: employeeName,
                userEmp: userEmp,
                dateOfBirth: dateOfBirth,
                sex: sex,
                addressEmp: addressEmp,
                emailAddress: emailEmp,
                phoneNumber: phoneNumber,
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
                swal("Error", "Your imaginary file is safe ??", "error");

            }

        });
    } else
        $('#checkInfor').text("Hãy nhập họ tên");

}


