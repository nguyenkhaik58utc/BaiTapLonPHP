@extends('Home.layout')

@section('NoiDung')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.7.7/xlsx.core.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xls/0.7.4-a/xls.core.min.js"></script>
    <script src="{{ URL::asset('js/post.js') }}"></script>
</head>
<body>
<h2>Thông báo</h2>
<div id="thongbao"></div>

</body>
</html>
@endsection
