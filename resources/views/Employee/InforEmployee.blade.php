@extends('Home.layout')

@section('NoiDung')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thông tin nhân viên</title>
    <script src="{{ URL::asset('js/employee.js') }}"></script>
</head>
<body>

<div class="container py-2">
    <h2 class="font-weight-light">Thông tin nhân viên</h2>
    <div class="row">

        <div class="col-lg-7 ">
            <form role="form">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Họ tên</label>
                    <div class="col-lg-9">
                        <input class="form-control" id="nameUser" type="text" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Tài khoản</label>
                    <div class="col-lg-9">
                        <input class="form-control" id="accountUser" type="text" disabled/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="email" id="emailUser"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Ngày sinh</label>
                    <div class="col-lg-9">
                        <input class="form-control" id="dateUser" type="date" value=""/>
                    </div>
                </div>
                <div class="form-group row" id="formSex">
                    <label class="col-lg-3 col-form-label form-control-label">Giới tính</label>
                    <div class="col-lg-9">
                        <select id="sexUser" style="width: 200px;height: 35px" class="form-control">
                            <option value="0">Nam</option>
                            <option value="1">Nữ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Địa chỉ</label>
                    <div class="col-lg-9">
                        <input class="form-control" id="addressUser" type="text" value=""/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Số điện thoại</label>
                    <div class="col-lg-9">
                        <input class="form-control" id="phoneUser" type="text"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Phòng ban</label>
                    <div class="col-lg-9">
                        <input class="form-control" id="departmentUser" type="text" disabled/>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Chức danh</label>
                    <div class="col-lg-9">
                        <input class="form-control" id="titleUser" type="text" disabled/>

                    </div>
                </div>
                <p id="checkInfor" style="color: red"></p>
                <div class="form-group row">
                    <div class="col-lg-9 ml-auto text-right">
                        <button class="btn btn-primary" onclick="changeInformation()">Save Change</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-ml-3 text-center">
            <img src="" id="imgAvatar" class="mx-auto img-fluid rounded-circle" style="width: 170px;height: 240px"
                 alt="avatar"/>
            <h6 class="my-4">Upload a new photo</h6>
            <input type="file" id="inputGroupFile02">
        </div>
    </div>
</div>
</body>
</html>
@endsection
