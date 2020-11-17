@extends('Home.layout')

@section('NoiDung')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Xét duyệt OverTime</title>
    <script src="{{ URL::asset('js/confirmOT.js') }}"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-5 ">
            <h3 style="margin-top: 20px;">Danh Sách Chờ Phê Duyệt</h3>
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
                            <button type="button" class="btn btn-info" onclick="Submit()">Submit</button>
                        </li>
                    </ul>

                </div>
            </nav>

        </div>
    </div>
    <div class="row">
        <table class="table table-hover" id="table">
            <thead>
            <tr>
                <th>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="select_all">
                        </label>
                    </div>
                </th>
                <th style="display:none ">ID</th>
                <th class="filter">Họ Tên</th>
                <th class="filter">Ngày đăng ký</th>
                <th>T/gian bắt đầu</th>
                <th>T/gian kết thúc</th>
                <th>Lý do</th>
                <th>Lý do hủy</th>
                <th class="filter">Trạng Thái</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody id="allRegistration">
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-2">
            <a onclick="PagitrationByMonth('PreviousByMonth','-1')">
                <i class="fas fa-fast-backward fa-2x" aria-hidden="true"
                   style="padding-right: 13px;"></i>
            </a> <a onclick="PagitrationByMonth('NextByMonth','1')">
                <i class="fas fa-fast-forward fa-2x" aria-hidden="true"
                   style="padding-right: 13px;"></i>
            </a>
        </div>
    </div>
</div>


<!--  popup hủy đăng ký  -->
<div id="myModalAdd1" class="modal fade" style="margin-top: 100px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 align="center" class="modal-title">Hủy Lịch Làm Việc</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- <form method="post" id="insert_form"> -->
                <input type="text" name="otId" id="otId" class="form-control" style="display:none ">
                <label>Lý Do: </label> <textarea type="text" name="reasonForCancel" rows="4"
                                                 id="reasonForCancel" class="form-control"></textarea>
                <!-- </form> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="close" data-dismiss="modal"
                        onclick="cancelRegistration()">
                    Send
                </button>
                <button type="button" class="close" data-dismiss="modal" style="margin-right: 20px">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
