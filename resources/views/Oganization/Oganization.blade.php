@extends('Home.layout')

@section('NoiDung')
    <!DOCTYPE html>
<html>
<head>
    <script src="{{ URL::asset('js/department.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/oganization.css') }}">
</head>
<body>
<h2>Cơ cấu tổ chức</h2>
<div class="row">
    <div class="col-sm-3">
        <div id="dataOganization" style="border-right: dashed"></div>
    </div>
    <div class="col-sm-9">
        <table class=" table order-list">
            <thead>
            <tr>
                <th>EmployeeId</th>
                <th class="filter">EmployeeName</th>
                <th class="filter">Email</th>
            </tr>
            </thead>
            <tbody id="getEmpByDepartment"></tbody>
        </table>
    </div>
</div>
</body>
</html>

@endsection
