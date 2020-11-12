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
                        <input class="form-control" id="nameUser" type="text" value="Jane"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Tài khoản</label>
                    <div class="col-lg-9">
                        <input class="form-control" id="accountUser" type="text" value="Bishop" disabled/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="email" id="emailUser" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Ngày sinh</label>
                    <div class="col-lg-9">
                        <input class="form-control" id="dateUser" type="date" value=""/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Giới tính</label>
                    <div class="col-lg-9">
                        <input class="form-control" id="sexUser" type="url" value=""/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Địa chỉ</label>
                    <div class="col-lg-9">
                        <input class="form-control" id="addressUser" type="text" value="" placeholder="Street"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Số điện thoại</label>
                    <div class="col-lg-9">
                        <input class="form-control" id="phoneUser" type="text"  placeholder="Street"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Phòng ban</label>
                    <div class="col-lg-9">
                        <select name="department" id="lstDepartment" style="width: 200px;height: 35px" class="form-control" >
                        </select>
                    </div>
                </div>
                <div class="form-group row" id="formTitle" hidden>
                    <label class="col-lg-3 col-form-label form-control-label">Chức danh</label>
                    <div class="col-lg-9">
                        <select name="title" id="lstTitle" style="width: 200px;height: 35px" class="form-control" >
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-9 ml-auto text-right">
                        <input type="reset" class="btn btn-outline-secondary" value="Cancel"/>
                        <input type="button" class="btn btn-primary" value="Save Changes"/>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-ml-3 text-center">
            <img src="//api.adorable.io/avatars/120/trickst3r.png" class="mx-auto img-fluid rounded-circle"
                 alt="avatar"/>
            <h6 class="my-4">Upload a new photo</h6>
            <input type="file"  id="inputGroupFile02">
        </div>
    </div>
</div>
</body>
</html>
@endsection
