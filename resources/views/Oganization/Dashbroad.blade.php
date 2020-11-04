@extends('Home.layout')

@section('NoiDung')
<!DOCTYPE html>
<html lang="en">
<title>Dashboard cơ cấu tổ chức</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link rel="stylesheet" type="text/css" href="{{ URL::asset('css/chart.css') }}">-->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>DashBoard</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>

<body>

<div class="chartngang" style="margin-top: 30px; margin-left: 30px; display: flex;">
    <div
        style="width: 450px; height: 100px; background-color: white;  border-radius: 3px ; border: 1px solid gray; margin-right: 30px;">

        <div class="row">
            <div class="col-sm-6" style="display: flex;">
                <div style="margin-left: 20px;margin-top: 20px"><img src="https://www.upsieutoc.com/images/2020/11/03/boy.png" style="width: 50px;height: 50px" alt="boy.png" border="0" /></div>
            </div>
            <div class="col-sm-6">
                <p style="font-size: 15px; margin-top: 20px;font-weight: bold;">Nam</p>
                <div id="numberBoy" style="color: rgb(15, 197, 15); "></div>
            </div>
        </div>
    </div>
    <div
        style="width: 450px; height: 100px; background-color: white;  border-radius: 3px ; border: 1px solid gray; margin-right: 30px;">

        <div class="row">
            <div class="col-sm-6" style="display: flex;">
                <div style="margin-left: 20px;margin-top: 20px"><img src="https://www.upsieutoc.com/images/2020/11/03/girl.png" style="width: 50px;height: 50px" alt="boy.png" border="0" /></div>
            </div>
            <div class="col-sm-6">
                <p style="font-size: 15px; margin-top: 20px;font-weight: bold;">Nữ</p>
                <div id="numberGirl" style="color: magenta;"></div>
            </div>
        </div>
    </div>
    <div
        style="width: 450px; height: 100px; background-color: white;  border-radius: 3px ; border: 1px solid gray; margin-right: 30px;">
        <p style="font-size: 15px; margin-top: 15px; margin-left: 30px; font-weight: bold;">Unique Visitor</p>
        <div class="row">
            <div class="col-sm-8" style="display: flex;">
                <i class="fas fa-signal"
                   style=" font-size: 25px; color: lightseagreen; margin-left: 30px; padding-top: 8px;"></i>
                <div style=" margin-top: 10px; margin-left: 2px;"><i class="fas fa-align-right"
                                                                     style=" font-size: 25px; color:lightseagreen; transform: rotate(90deg);"></i></div>
            </div>
            <div class="col-sm-4">
                <div class="sophantram" style="color: indigo;">~12%</div>
            </div>
        </div>
    </div>
    <div
        style="width: 450px; height: 100px; background-color: white;  border-radius: 3px ; border: 1px solid gray; margin-right: 30px;">
        <p style="font-size: 15px; margin-top: 15px; margin-left: 30px; font-weight: bold;">Brounce Rate</p>
        <div class="row">
            <div class="col-sm-8" style="display: flex;">
                <i class="fas fa-signal"
                   style=" font-size: 25px; color:red; margin-left: 30px; padding-top: 8px;"></i>
                <div style=" margin-top: 10px; margin-left: 2px;"><i class="fas fa-align-right"
                                                                     style=" font-size: 25px; color: red; transform: rotate(90deg);"></i></div>
            </div>
            <div class="col-sm-4">
                <div class="sophantram" style="color: blue;">33%</div>
            </div>
        </div>
    </div>
</div>
<div class="chart" style="display: flex;">
    <div style="margin-top: 30px; margin-left: 30px; border: 1px solid gray;">
        <div id="piechart"></div>

        <script type="text/javascript">
            google.charts.load('current', { 'packages': ['corechart'] });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Giám đốc', 1],
                    ['Phó giám đốc', 2],
                    ['Trưởng phòng', 3],
                    ['Phó phòng', 3],
                    ['Kế toán', 1],
                    ['Admin', 1],
                    ['HR', 1],
                    ['Lập trình viên', 7],
                    ['Thực tập sinh', 1],
                    ['BA', 2],
                    ['tester', 2],
                    ['comtor', 2]
                ]);
                var options = { 'font-size' : 20,'title': 'Thống kê theo chức danh', 'width': 500,'height': 450 };
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            }
        </script>
    </div>
    <div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-6">
                <div
                    style="width: 315px; height: 100px;  background-color: white;  border-radius: 3px ; border: 1px solid gray;margin-left: 30px">
                    <p style="font-size: 15px; margin-top: 15px; margin-left: 30px; font-weight: bold;">Total Visits</p>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-sm-8" style="display: flex;">
                            <i class="fas fa-signal"
                               style=" font-size: 25px; color: rgb(15, 197, 15); margin-left: 30px; padding-top: 8px;"></i>
                            <div style=" margin-top: 10px; margin-left: 2px;"><i class="fas fa-align-right"
                                                                                 style=" font-size: 25px; color: rgb(15, 197, 15); transform: rotate(90deg);"></i></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="sophantram" style="color: rgb(15, 197, 15); ">+10%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div
                    style="width: 315px; height: 100px; background-color: white;  border-radius: 3px ; border: 1px solid gray;">
                    <p style="font-size: 15px; margin-top: 15px; margin-left: 30px; font-weight: bold;">Total Visits</p>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-sm-8" style="display: flex;">
                            <i class="fas fa-signal"
                               style=" font-size: 25px; color: rgb(15, 197, 15); margin-left: 30px; padding-top: 8px;"></i>
                            <div style=" margin-top: 10px; margin-left: 2px;"><i class="fas fa-align-right"
                                                                                 style=" font-size: 25px; color: rgb(15, 197, 15); transform: rotate(90deg);"></i></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="sophantram" style="color: rgb(15, 197, 15); ">+10%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 30px; border: 1px solid gray;margin-left: 30px;width: 642px">
            <div id="piechart1"></div>
            <script type="text/javascript">
                google.charts.load('current', { 'packages': ['corechart'] });
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Back- Office', 4],
                        ['Ban giám đốc', 3],
                        ['Business unit 1', 10],
                        ['Business unit 2', 7]
                    ]);

                    var options = { 'font-size' : 15, 'title': 'Thống kê theo phòng ban', 'width': 640, 'height': 320 };
                    var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
                    chart.draw(data, options);
                }
            </script>
        </div>

    </div>
</div>
</body>

</html>
@endsection
