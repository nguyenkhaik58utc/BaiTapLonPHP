@extends('Home.layout')

@section('NoiDung')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký OverTime</title>
    <script src="{{ URL::asset('js/Employee.js') }}"></script>
    <script src="{{ URL::asset('js/listEmployee.js') }}"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-5 ">
            <h3 style="margin-top: 20px;">Danh Sách Đăng Ký</h3>
        </div>
        <div class="col-md-7">
            <nav class="navbar navbar-expand-lg  ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav "
                        style="position: absolute; top: 0; right: 0; margin-top: 14px;">
                        <li class="nav-item dropdown">
                            <button type="button"
                                    class="nav-link dropdown-toggle btn btn-info"
                                    href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                Search
                            </button>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                                 style="width:180px;background-color:aqua">
                                <!-- <a class="dropdown-item" href="a.html">Search</a> -->
                                <a class="dropdown-item"
                                   onclick="functionSearchOT(2)">
                                    Đăng ký không thành công
                                </a>
                                <br/>
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item"
                                   onclick="functionSearchOT(1) ">
                                    Đăng ký thành công
                                </a>
                                <br/>
                                <a class="dropdown-item"
                                   onclick="functionSearchOT(3) ">
                                    Chờ Phê Duyệt
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="editInfor btn btn-info" onclick="Submit1()">Submit</button>
                        </li>
                    </ul>

                </div>
            </nav>

        </div>
    </div>
</div>

<div class="container" >
    <div class="row">
        <table id="myTable" class=" table order-list">
            <thead>
            <tr>
                <th>Ngày đăng ký</th>
                <th>T/gian bắt đầu</th>
                <th>T/gian kết thúc</th>
                <th>Lý do</th>
                <th>Lý do hủy (nếu có)</th>
                <th>Trạng thái</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody id="tableRegistration">

            </tbody>
        </table>
    </div>
</div>
<div class="container" style="padding-top: 25px;">
    <div class="row">
        <div class="col-md-10">
            <nav class="navbar navbar-expand-sm"
                 style="margin-bottom: 0px; border-bottom-width: 0px; padding-bottom: 5px; padding-right: 0px; padding-top: 0px; border-top-width: 0px;">
                <!-- Brand/logo -->
                <div class="navbar-nav mr-auto">
                    <button type="button" class="btn btn-info addrow" id="addrow">
                        Add New
                    </button>
                    <p id="demo1" style="color: red"></p>
                </div>
            </nav>
        </div>

        <div class="col-md-2">
            <a onclick="PagitrationByMonthAddOT('PreviousByMonth','-1')">
                <i class="fas fa-fast-backward fa-2x" aria-hidden="true"
                   style="padding-right: 13px;"></i>
            </a> <a onclick="PagitrationByMonthAddOT('NextByMonth','1')">
                <i class="fas fa-fast-forward fa-2x" aria-hidden="true"
                   style="padding-right: 13px;"></i>
            </a>
        </div>
    </div>
</div>

<!-- popup xoa -->
<div id="myModalAdd2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 align="center" class="modal-title">Lý do hủy</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" id="insert_form">
                    <input type="number" name="otId2" id="otId2" hidden aria-hidden="true"/>
                    <label>Lý Do :</label> <textarea type="text" name="LyDoHuy2" rows="4"
                                                     id="LyDoHuy2" class="form-control"></textarea> <br>
                </form>
            </div>
            <div class="modal-footer">
                <button onclick="functionDelete()" type="button" class="close"
                        data-dismiss="modal">
                    delete
                </button>
            </div>
        </div>
    </div>
</div>


</body>
</html>
@endsection
