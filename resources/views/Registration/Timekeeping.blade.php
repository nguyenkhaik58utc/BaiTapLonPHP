@extends('Home.layout')

@section('NoiDung')
    <!DOCTYPE html>
<html>
<head>
    <title>Dữ liệu chấm công</title>
    <script src="{{ URL::asset('js/totalSalary.js') }}"></script>
</head>
<body>
<h2>Dữ liệu chấm công</h2>
<input type="month" id="start" name="start">
<table class=" table order-list">
    <thead>
    <tr>
        <th>Ngày</th>
        <th >Giờ vào (AM)</th>
        <th >Giờ ra (AM)</th>
        <th >Giờ vào (PM)</th>
        <th >Giờ ra (PM)</th>
        <th >Giờ vào (OT)</th>
        <th >Giờ ra (OT)</th>
    </tr>
    </thead>
    <tbody id="dataTimeKeeping"></tbody>
</table>
</body>
</html>

@endsection
