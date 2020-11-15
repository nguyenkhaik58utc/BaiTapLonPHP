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
                <div class="row">
                    <form role="form">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label" style="padding-left: 50px">Họ tên</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="nameEmp" type="text" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label" style="padding-left: 50px">Tài khoản</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="accountEmp" type="text"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label" style="padding-left: 50px">Email</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="email" id="emailEmp"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label" style="padding-left: 50px">Ngày sinh</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="dateEmp" type="date" value=""/>
                            </div>
                        </div>
                        <div class="form-group row" id="formSexEmp">
                            <label class="col-lg-3 col-form-label form-control-label" style="padding-left: 50px">Giới tính</label>
                            <div class="col-lg-8">
                                <select id="sexEmp" style="width: 200px;height: 35px" class="form-control">
                                    <option value="0">Nam</option>
                                    <option value="1">Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label" style="padding-left: 50px">Địa chỉ</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="addressEmp" type="text" value="" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label" style="padding-left: 50px">Số điện thoại</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="phoneEmp" type="text" />
                            </div>
                        </div>
                        <div class="form-group row" id="formRole">
                            <label class="col-lg-3 col-form-label form-control-label" style="padding-left: 50px">Phân quyền</label>
                            <div class="col-lg-8">
                                <select id="lstRole" class="form-control">
                                    <option value="1">Nhân viên</option>
                                    <option value="2">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row" id="formDepartment">
                            <label class="col-lg-3 col-form-label form-control-label" style="padding-left: 50px">Phòng ban</label>
                            <div class="col-lg-8">
                                <select id="lstDepartment" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="form-group row" id="formTitle" hidden>
                            <label class="col-lg-3 col-form-label form-control-label" style="padding-left: 50px">Chức danh</label>
                            <div class="col-lg-8">
                                <select id="lstTitle" class="form-control">
                                </select>

                            </div>
                        </div>
                        <p id="checkNUll" style="color: red;margin-left: 50px"></p>
                        <div class="form-group row" hidden>
                            <label class="col-lg-3 col-form-label form-control-label" style="padding-left: 50px">Chức danh</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="IdEmp" type="text" />
                            </div>
                        </div>
                    </form>
                </div>
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

</body>
</html>
@endsection
