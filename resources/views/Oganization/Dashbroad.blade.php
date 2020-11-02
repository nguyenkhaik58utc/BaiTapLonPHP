@extends('Home.layout')

@section('NoiDung')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/chart.css') }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="chart.css">
</head>

<body>

<div class="chartngang" style="margin-top: 30px; margin-left: 30px; display: flex;">
    <div
        style="width: 450px; height: 100px; background-color: white;  border-radius: 3px ; border: 1px solid gray; margin-right: 30px;">
        <p style="font-size: 15px; margin-top: 15px; margin-left: 30px; font-weight: bold;">Total Visits</p>
        <div class="row">
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
    <div
        style="width: 450px; height: 100px; background-color: white;  border-radius: 3px ; border: 1px solid gray; margin-right: 30px;">
        <p style="font-size: 15px; margin-top: 15px; margin-left: 30px; font-weight: bold;">Total Page Views</p>
        <div class="row">
            <div class="col-sm-8" style="display: flex;">
                <i class="fas fa-signal"
                   style=" font-size: 25px; color: indigo; margin-left: 30px; padding-top: 8px;"></i>
                <div style=" margin-top: 10px; margin-left: 2px;"><i class="fas fa-align-right"
                                                                     style=" font-size: 25px; color:indigo; transform: rotate(90deg);"></i></div>
            </div>
            <div class="col-sm-4">
                <div class="sophantram" style="color: magenta;">-7%</div>
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

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
            // Load google charts
            google.charts.load('current', { 'packages': ['corechart'] });
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Work', 8],
                    ['Eat', 2],
                    ['TV', 4],
                    ['Gym', 2],
                    ['Sleep', 8]
                ]);

                // Optional; add a title and set the width and height of the chart
                var options = { 'title': 'My Average Day', 'width': 1200, 'height': 700 };

                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            }
        </script>
    </div>
    <div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-6">
                <div
                    style="width: 300px; height: 150px; background-color: white;  border-radius: 3px ; border: 1px solid gray;">
                    <p style="font-size: 15px; margin-top: 15px; margin-left: 30px; font-weight: bold;">Total Visits</p>
                    <div class="row">
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
                    style="width: 300px; height: 150px; background-color: white;  border-radius: 3px ; border: 1px solid gray;">
                    <p style="font-size: 15px; margin-top: 15px; margin-left: 30px; font-weight: bold;">Total Visits</p>
                    <div class="row">
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
        <div style="margin-top: 30px; border: 1px solid gray;">
            <div id="piechart1"></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <script type="text/javascript">
                // Load google charts
                google.charts.load('current', { 'packages': ['corechart'] });
                google.charts.setOnLoadCallback(drawChart);

                // Draw the chart and set the chart values
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Work', 8],
                        ['Eat', 2],
                        ['TV', 4],
                        ['Gym', 2],
                        ['Sleep', 8]
                    ]);

                    // Optional; add a title and set the width and height of the chart
                    var options = { 'title': 'My Average Day', 'width': 680, 'height': 520 };

                    // Display the chart inside the <div> element with id="piechart"
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
