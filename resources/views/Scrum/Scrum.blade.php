@extends('Home.layout')

@section('NoiDung')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/Scrum.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>

<body>
<script>
    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
    }
</script>

<div class="content">
    <h2 style="color: rgb(5, 131, 89); margin-left: 65px; margin-right: 5px;">SPRINT 4(QUẢN LÝ SỰ CỐ) <h2
            style="color: gray; margin-right: 5px;">KDAS ONLINE </h2>
    </h2>
</div>
<div class="header1">
    <ul class="menungang" style="display: flex;">

        <li><i class="fas fa-battery-quarter" style="color: red; font-size: 60px;  margin-right: 110px;"></i></li>
        <li>
            <h5 style="font-size: 35px; color: white; padding-left: 60px;">13%</h5>
        </li>
        <li><i class="fas fa-chevron-down"
               style="font-size: 20px; color: white; padding-top: 25px; margin-left: 15px;"></i></li>
        <li>
            <h5 style="font-size: 35px; color: white; margin-left: 10px;">11.5</h5>
        </li>
        <li>
            <h5 style=" color: white; padding-top: 3px; margin-left: 5px; font-size: 15px;">total<br>points</h5>
        </li>
        <li>
            <h5 style="font-size: 35px; color: white; padding-left: 30px;">1.5</h5>
        </li>
        <li>
            <h5
                style=" color: white; padding-top: 3px; margin-left: 5px; font-size: 15px; border-right: 2px solid rgba(248, 246, 246, 0.541); padding-right: 40px;">
                completed<br>points</h5>
        </li>
        <li>
            <h5 style="font-size: 35px; color: white; padding-left: 60px;">17</h5>
        </li>
        <li>
            <h5 style=" color: white; padding-top: 3px; margin-left: 5px; font-size: 15px;">Open<br>Tasks</h5>
        </li>
        <li>
            <h5 style="font-size: 35px; color: white; padding-left: 30px;;">2</h5>
        </li>
        <li>
            <h5 style=" color: white; padding-top: 3px; margin-left: 5px; font-size: 15px;">Close<br>Tasks</h5>
        </li>
        <li><i class="fas fa-exchange-alt"
               style=" height: 35px;font-size: 20px; color: white; margin-top: 10px; padding-top: 10px; padding-left: 30px;border-right: 2px solid rgba(248, 246, 246, 0.541); padding-right: 40px;"></i>
        </li>
        <li>
            <h5 style="font-size: 35px; color: white; padding-left: 60px;">0</h5>
        </li>
        <li>
            <h5 style=" color: white; padding-top: 3px; padding-left: 5px; font-size: 15px;">iocaine<br>doses</h5>
        </li>
    </ul>
</div>
<div class="container">
    <div class="f-grid" style="width: 100%;">
        <div class="f-grid-col" ondrop="drop(event)" ondragover="allowDrop(event)"
             style="border-top: 4px solid gray; margin-left: 60px;">
            <div style="color: gray; font-size: 20px; height: 30px;">USER SOTRY</div>
        </div>
        <div class="f-grid-col" ondrop="drop(event)" ondragover="allowDrop(event)"
             style="border-top: 4px solid gray;">
            <div style="color: gray; font-size: 20px; height: 30px;">NEW</div>
            <div style="background-color: white; height: auto; border-radius: 5px; margin-bottom: 10px;" id="drag1"
                 draggable="true" ondragstart="drag(event)">
                <table>
                    <tr>
                        <td>
                            <img src="/img/49899087_279230109413490_377876763209891840_n.jpg" width="50px" height="50px"
                                 style="margin-top: 10px ; size: 100%;">
                        </td>
                        <td>
                            <div style="font-size: 18px; color: gray;">Trần Quốc Vượng</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div style="margin-top: 10px; font-size: 15px; margin-bottom: 15px;">#133 Tạo bảng
                                lưu thông
                                tin chức danh của nhân sự (1 nhân sự có thể có nhiều chức danh)</div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="f-grid-col" ondrop="drop(event)" ondragover="allowDrop(event)"
             style="border-top: 4px solid orange;">
            <div style="color: gray; font-size: 20px; height: 30px;">IN PROGRESS</div>
            <div style="background-color: white; height: auto; border-radius: 5px; margin-bottom: 10px;" id="drag2"
                 draggable="true" ondragstart="drag(event)">
                <table>
                    <tr>
                        <td>
                            <img src="/img/scrum1.jpg" width="50px" height="50px" style="margin-top: 10px ; size: 100%;">
                        </td>
                        <td>
                            <div style="font-size: 18px; color: gray;">Trần Quốc Vượng</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div style="margin-top: 10px; font-size: 15px; margin-bottom: 15px;">#133 Tạo bảng
                                lưu thông
                                tin chức danh của nhân sự (1 nhân sự có thể có nhiều chức danh)</div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="f-grid-col" ondrop="drop(event)" ondragover="allowDrop(event)"
             style="border-top: 4px solid gold;">
            <div style="color: gray; font-size: 20px; height: 30px;">READY FOR TEST</div>
        </div>
        <div class="f-grid-col" ondrop="drop(event)" ondragover="allowDrop(event)"
             style="border-top: 4px solid rgb(9, 206, 9);">
            <div style="color: gray; font-size: 20px; height: 30px;">CLOSE</div>
        </div>
    </div>
</div>

</body>

</html>
@endsection
