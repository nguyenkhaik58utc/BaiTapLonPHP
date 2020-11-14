<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần mềm hỗ trợ quản lý hoạt động nghiệp vụ</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ URL::asset('js/login.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/login.css') }}">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link data-semver="0.4.2" rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
</head>
<body>
<div class="phan1">
    <div class="col-sm-1">
        <img src="/img/logoKdas.png" alt="" style="width: 87px; height: 35px; float: right; margin-top: 5px;">
    </div>
    <div class="col-sm-11">
        <span class="spanidas">HỆ THỐNG ISO ĐIỆN TỬ - KDAS</span>
    </div>
</div>
<div class="phan2">
    <div class="row">
        <div class="col-sm-7">
            <img src="/img/logoKdas2.png" alt="" style=" height: 500px; margin-top: 50px; margin-bottom: 40px; margin-left: 120px;">
        </div>
        <div class="col-sm-5">
            <div class="bo" style="margin-top: 30%;margin-right: 100px; color: white;">
                <div class="tren" style="background-color: #32467F;">
                    <table>
                        <tr>
                            <td><span class="cot1">Tài khoản</span></td>
                            <td>
                                <div class="inputWithIcon">
                                    <input type="text" id="user" placeholder="User"/>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="cot1">Mật khẩu</span></td>
                            <td>
                                <div class="inputWithIcon">
                                    <input type="password" id="pw" placeholder="Password" style="color: black ;padding-left: 40px;height: 30px;width: 270px"/>
                                    <i class="fa fa-key" style="padding-top: 0px" aria-hidden="true"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div  style="background-image: url('/img/1.png'); background-size: 100%; width: 120px;">
                                    <span style="font-size: 20px; color: darkslategray;"><b><i id="sothunhat"></i></b></span>
                                    <span style="font-size: 20px; color: darkslategray;"><b>+</b></span>
                                    <span style="font-size: 20px; color: darkslategray;"><b><i id="sothuhai"></i></b></span>
                                    <span style="font-size: 20px; color: darkslategray;"><b>= ?</b></span>
                                </div>
                            </td>
                            <td>
                                <div class="inputWithIcon">
                                    <input type="text" id="calculator" placeholder="calculator">
                                    <i class="fa fa-calculator" aria-hidden="true"></i>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="duoi" style="background-color: white; ">
                    <button onclick="login()" style="color: white; background-color: maroon; border-radius: 5px; float:right; margin-right: 15px; font-size: 18px;">Đăng nhập</button>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
