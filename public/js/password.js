function changePW() {
    var currentpw = document.getElementById("currentPw").value;
    var psw = document.getElementById("psw").value;

    $.ajax({
        type: 'Get',
        url: 'Change',
        data: {
            currentpw: currentpw,
            psw: psw
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
            swal("Error", "Change false", "error");
        }
    });
}
