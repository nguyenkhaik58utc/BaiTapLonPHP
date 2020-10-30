@extends('Home.layout')

@section('NoiDung')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký OverTime</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.7.7/xlsx.core.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xls/0.7.4-a/xls.core.min.js"></script>
    <script src="{{ URL::asset('js/totalSalary.js') }}"></script>
</head>
<body>
<input type="file" id="excelfile" class="btn btn-info" />
<button type="button" class="btn btn-info" onclick="TinhLuong()" style="margin-top:20px">Tính Lương</button>
<br />
<br />
<table id="exceltable" class=" table order-list" style="border:dashed">
</table>


</body>
</html>
@endsection
