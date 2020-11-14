@extends('Home.layout')

@section('NoiDung')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách nhân viên</title>
    <script src="{{ URL::asset('js/listEmployee.js') }}"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-5 ">
            <h3 style="margin-top: 20px;">Danh Sách Nhân Viên</h3>
        </div>
        <div class="col-md-7">
            <nav class="navbar navbar-expand-lg  ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav "
                        style="position: absolute; top: 0; right: 0; margin-top: 14px;">


                    </ul>

                </div>
            </nav>

        </div>
    </div>
</div>


<div class="container" style="padding-top: 25px;">
    <div class="row">
        <table id="tableEmployee" class=" table order-list">
            <thead>
            <tr>
                <th>EmployeeId</th>
                <th class="filter">EmployeeName</th>
                <th class="filter">Department</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            </thead>
            <tbody id="listEmployee">

            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-md-9">
            <nav class="navbar navbar-expand-sm"
                 style="margin-bottom: 0px; border-bottom-width: 0px; padding-bottom: 5px; padding-right: 0px; padding-top: 0px; border-top-width: 0px;">
                <!-- Brand/logo -->
                <div class="navbar-nav mr-auto">
                    <button type="button"
                            class="btn btn-info" id="add-employee">
                        <i class="fa fa-plus"></i> Add New
                    </button>
                    <p id="demo1" style="color: red"></p>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- popup xoa -->

<div id="popupDelete" class="modal fade">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" style="text-align: center;" id="titleDelete">

                </h2>
            </div>
            <div class="modal-body" hidden>
                <form method="post" id="insert_form">
                    <input type="number" name="employeeId" id="employeeId"
                           class="form-control" readonly/>
                </form>
            </div>
            <div class="modal-footer">
                <button onclick="functionDeleteEmp()" type="button" class="close"
                        data-dismiss="modal">
                    Delete
                </button>
                <button type="button" class="close" data-dismiss="modal" style="margin-right: 30px">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal-update" style="padding-left: 0">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header for-add" style="background-color: #118fa6">
                <h4 class="modal-title" style="color: white">Thêm Nhân Viên</h4>
            </div>
            <div class="modal-header for-update"
                 style="background-color: #118fa6">
                <h4 class="modal-title" style="color: white">
                    Sửa Thông Tin Nhân Viên <span id="role-name-update"></span>
                </h4>
            </div>


            <div class=" center">
                <form action="#" method="POST" accept-charset="UTF-8">

                    <input class="form-control form-control-lg" type="text"
                           placeholder="ID" name="employeeID" id="employeeID"
                           style="height: 2em; border-radius: 2em; margin-top: 0.3em; display: none;">
                    <input style="display: none" id="ava-upload" name="images">
                    <input class="form-control form-control-lg" type="text"
                           placeholder="Họ và tên" name="employeeName" id="employeeName"
                           style="height: 2em; border-radius: 2em; margin-top: 0.3em;">
                    <input class="form-control form-control-lg" type="text"
                           placeholder="Tên đăng nhập" name="userEmp" id="userEmp"
                           style="height: 2em; border-radius: 2em; margin-top: 0.3em;">
                    <input class="form-control form-control-lg" type="text"
                           placeholder="Chức Vụ" name="department" id="department"
                           style="height: 2em; border-radius: 2em; margin-top: 0.3em;">
                    <input class="form-control form-control-lg" type="date"
                           placeholder="Ngày Sinh" name="dateOfBirth" id="dateOfBirth"
                           style="height: 2em; border-radius: 2em; margin-top: 0.3em;">
                    <select class="form-control"
                            style="border-radius: 2em; margin-top: 0.3em;" id="sex">
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select> <input class="form-control form-control-lg" type="text"
                                     placeholder="Đại chỉ" name="addressEmp" id="addressEmp"
                                     style="height: 2em; border-radius: 2em; margin-top: 0.3em;">
                    <input class="form-control form-control-lg" type="text"
                           placeholder="Email" name="emailAddress" id="emailAddress"
                           style="height: 2em; border-radius: 2em; margin-top: 0.3em;">
                    <input class="form-control form-control-lg" type="text"
                           placeholder="Số DT" name="phoneNumber" id="phoneNumber"
                           style="height: 2em; border-radius: 2em; margin-top: 0.3em;">
                    <select name="lstRole" id="lstRole" style="width: 100%" hidden
                            class="form-control form-control-lg"
                            style="height: 2em; border-radius: 2em; margin-top: 0.3em;">
                    </select>

                </form>
            </div>

            <div class="modal-footer" style="justify-content: center">
                <button id="submit-add-btn"
                        style="background-color: #055608; color: white"
                        class="btn btn-default for-add" data-dismiss="modal">
                    CREATE
                </button>

                <button id="submit-update-btn"
                        style="background-color: #055608; color: white"
                        class="btn btn-default for-update" data-dismiss="modal">
                    UPDATE
                </button>
                <button id="cancle-btn"
                        style="background-color: #b51515; color: white"
                        class="btn btn-default" data-dismiss="modal">
                    CANCLE
                </button>
            </div>
        </div>
    </div>
</div>
<div style="display: none;">
    <div id="male-src"><%=request.getContextPath()%>/images/image-defaul/male.jpg</div>
    <div id="female-src"><%=request.getContextPath()%>/images/image-defaul/female.png</div>
</div>

</body>
</html>
@endsection
