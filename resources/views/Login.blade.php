<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/layoutsite.css">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
        /* Made with love by Mutiullah Samim*/
        @import url('https://fonts.googleapis.com/css?family=Numans');
        html, body {
            background-image: url('https://i.imgur.com/iSwVGmU.png');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }
        .container {
            height: 100%;
            align-content: center;
        }
        .card {
            height: 370px;
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0, 0, 0, 0.5) !important;
        }
        .social_icon span {
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
        }
        .social_icon span:hover {
            color: white;
            cursor: pointer;
        }
        .card-header h3 {
            color: white;
        }
        .social_icon {
            position: absolute;
            right: 20px;
            top: -45px;
        }
        .input-group-prepend span {
            width: 50px;
            background-color: #FFC312;
            color: black;
            border: 0 !important;
        }
        input:focus {
            box-shadow: 0 0 0 0 !important;
        }
        .remember {
            color: white;
        }
        .remember input {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }
        .login_btn {
            color: black;
            background-color: #FFC312;
            width: 100px;
        }
        .login_btn:hover {
            color: black;
            background-color: white;
        }
        .links {
            color: white;
        }
        .links a {
            margin-left: 4px;
        }
    </style>

    <title>Login Page</title>
    <!--Fontawesome CDN-->
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <!--Custom styles-->
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <img
                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNjQuNiA4MC4zNSI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiNmZmZ9PC9zdHlsZT48L2RlZnM+PGcgaWQ9IkxheWVyXzIiIGRhdGEtbmFtZT0iTGF5ZXIgMiI+PGcgaWQ9IkxheWVyXzEtMiIgZGF0YS1uYW1lPSJMYXllciAxIj48ZyBpZD0iQmFuZ19oaWV1XzIiIGRhdGEtbmFtZT0iQmFuZyBoaWV1IDIiPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTQxIDc4LjA2YS42Ny42NyAwIDAgMS0uMjItLjUxdi05Ljc5YS42Ny42NyAwIDAgMSAuMjItLjUyLjcuNyAwIDAgMSAuNTQtLjIyaDYuNTNhLjczLjczIDAgMCAxIC41MS4yLjY1LjY1IDAgMCAxIC4yMS40OS42My42MyAwIDAgMS0uMjEuNDguNzIuNzIgMCAwIDEtLjUxLjE5aC01Ljc4djMuNTRoNS4xN2EuNzEuNzEgMCAwIDEgLjUyLjIuNjcuNjcgMCAwIDEgMCAxIC43OS43OSAwIDAgMS0uNTIuMTloLTUuMTd2NC4yN2EuNjguNjggMCAwIDEtLjIzLjUxLjc2Ljc2IDAgMCAxLS41NC4yMS43My43MyAwIDAgMS0uNTItLjI0em0xMi4xOS0uMjRhMy42NSAzLjY1IDAgMCAxLTEuNS0xLjQ5IDQuOTEgNC45MSAwIDAgMSAwLTQuNDQgMy42NSAzLjY1IDAgMCAxIDEuNS0xLjQ5IDQuNzMgNC43MyAwIDAgMSAyLjI3LS41MyA0LjY3IDQuNjcgMCAwIDEgMi4yNS41MyAzLjczIDMuNzMgMCAwIDEgMS41MSAxLjQ5IDQuODMgNC44MyAwIDAgMSAwIDQuNDQgMy43MyAzLjczIDAgMCAxLTEuNTEgMS40OSA0LjY3IDQuNjcgMCAwIDEtMi4yNS41MyA0LjczIDQuNzMgMCAwIDEtMi4yNy0uNTN6bTMuNTktMS4xYTIuNTIgMi41MiAwIDAgMCAxLTEgMyAzIDAgMCAwIC40MS0xLjY3IDMgMyAwIDAgMC0uNDEtMS42NCAyLjQ1IDIuNDUgMCAwIDAtMS0xIDMuMTcgMy4xNyAwIDAgMC0xLjMyLS4yOSAzLjIzIDMuMjMgMCAwIDAtMS4zNC4yOSAyLjQzIDIuNDMgMCAwIDAtMSAxIDMgMyAwIDAgMC0uNCAxLjY0IDMuMTMgMy4xMyAwIDAgMCAuNCAxLjY3IDIuNDkgMi40OSAwIDAgMCAxIDEgMy4wOSAzLjA5IDAgMCAwIDEuMzQuMyAzIDMgMCAwIDAgMS4zMi0uM3ptOC4zMSAxLjFhMy43MyAzLjczIDAgMCAxLTEuNTEtMS40OSA0LjkxIDQuOTEgMCAwIDEgMC00LjQ0IDMuNzMgMy43MyAwIDAgMSAxLjUxLTEuNDkgNS4wOCA1LjA4IDAgMCAxIDQuNTIgMCAzLjczIDMuNzMgMCAwIDEgMS41MSAxLjQ5IDQuODMgNC44MyAwIDAgMSAwIDQuNDQgMy43MyAzLjczIDAgMCAxLTEuNTEgMS40OSA1LjA4IDUuMDggMCAwIDEtNC41MiAwem0zLjU4LTEuMWEyLjYgMi42IDAgMCAwIDEtMSAzLjEzIDMuMTMgMCAwIDAgLjQxLTEuNjcgMyAzIDAgMCAwLS40MS0xLjY0IDIuNTMgMi41MyAwIDAgMC0xLTEgMy4xNyAzLjE3IDAgMCAwLTIuNjUgMCAyLjM3IDIuMzcgMCAwIDAtMSAxIDMgMyAwIDAgMC0uNDEgMS42NCAzLjEzIDMuMTMgMCAwIDAgLjM5IDEuNzEgMi40MyAyLjQzIDAgMCAwIDEgMSAzLjA4IDMuMDggMCAwIDAgMi42NSAwem03LjI0LS40OHYtNWgtMS4yYS4yOS4yOSAwIDAgMS0uMjItLjA5LjI3LjI3IDAgMCAxLS4xLS4yMi4zNC4zNCAwIDAgMSAuMTUtLjI3bDIuMjktMi4xM2EuNDYuNDYgMCAwIDEgLjI5LS4xNC4yOC4yOCAwIDAgMSAuMjIuMS4yOS4yOSAwIDAgMSAuMDkuMjJWNzBoMS45YS42OC42OCAwIDAgMSAuNDcuMTcuNTguNTggMCAwIDEgLjE5LjQ1LjU4LjU4IDAgMCAxLS4xOS40NC42MS42MSAwIDAgMS0uNDcuMTloLTEuOXY0LjgzYzAgLjQyLjExLjY4LjMyLjc5YTEuNjEgMS42MSAwIDAgMCAuNzguMTcgMi4yNyAyLjI3IDAgMCAwIC42Ny0uMWguMzNhLjYuNiAwIDAgMSAuNDIuMTYuNTIuNTIgMCAwIDEgLjE5LjQxLjYuNiAwIDAgMS0uMzkuNTYgMy40MyAzLjQzIDAgMCAxLTEuMzkuMjljLTEuNjQtLjAxLTIuNDUtLjcxLTIuNDUtMi4xMnptNy40NiA0LjIyYS40OC40OCAwIDAgMS0uMTQtLjM0LjQyLjQyIDAgMCAxIC4yNS0uMzkgMS44OSAxLjg5IDAgMCAwIC42NC0uNTcgMS41OCAxLjU4IDAgMCAwIC4yMi0uOTJoLS4wN2EuOS45IDAgMCAxLS42Ni0uMjcuODEuODEgMCAwIDEtLjI4LS42M3YtLjFhLjg0Ljg0IDAgMCAxIC4yOC0uNjMuOTMuOTMgMCAwIDEgLjY2LS4yNmguMTdhLjkzLjkzIDAgMCAxIC42Ni4yNi44NC44NCAwIDAgMSAuMjguNjN2MUEyLjU3IDIuNTcgMCAwIDEgODQgODAuNTNhLjU3LjU3IDAgMCAxLS4yOC4wOC40Ny40NyAwIDAgMS0uMzUtLjE1em0xMy43NS0zLjMzdi40MmEuNjcuNjcgMCAwIDEtLjIyLjUxLjc5Ljc5IDAgMCAxLS41NS4yMS43Ni43NiAwIDAgMS0uNTQtLjIxLjcuNyAwIDAgMS0uMjItLjUxVjY3LjE2YS43LjcgMCAwIDEgLjIyLS41MS43My43MyAwIDAgMSAuNTQtLjIyLjc1Ljc1IDAgMCAxIC41NS4yMS42Ny42NyAwIDAgMSAuMjIuNTJ2My45M2E0IDQgMCAwIDEgMi44OC0xLjIyIDQuMTUgNC4xNSAwIDAgMSAyIC41IDMuOSAzLjkgMCAwIDEgMS41MSAxLjQ4IDQuNjkgNC42OSAwIDAgMSAwIDQuNTIgMy45IDMuOSAwIDAgMS0xLjUxIDEuNDggNC4xNSA0LjE1IDAgMCAxLTIgLjUgNCA0IDAgMCAxLTIuODgtMS4yMnptNC42Ni0uODlhMy40IDMuNCAwIDAgMCAwLTQuMjYgMi43MiAyLjcyIDAgMCAwLTItLjc1IDMuMzIgMy4zMiAwIDAgMC0xLjQ2LjMzIDQuMjkgNC4yOSAwIDAgMC0xLjIuODd2My4zNmE0LjI5IDQuMjkgMCAwIDAgMS4yLjg3IDMuMzIgMy4zMiAwIDAgMCAxLjQ2LjMzIDIuNzIgMi43MiAwIDAgMCAyLS43NXptNi4zMSAxLjgyYS43LjcgMCAwIDEtLjIyLS41MXYtNi44NmEuNzUuNzUgMCAwIDEgLjIyLS41My43Ni43NiAwIDAgMSAuNTQtLjIxLjc5Ljc5IDAgMCAxIC41NS4yMS43MS43MSAwIDAgMSAuMjIuNTN2LjY4YTMuMzcgMy4zNyAwIDAgMSAyLjY0LTEuNWguMDlhLjcyLjcyIDAgMCAxIC43My43Mi42Ni42NiAwIDAgMS0uMjEuNS44Ni44NiAwIDAgMS0uNTYuMTlIMTEyYTMgMyAwIDAgMC0xLjQ4LjM3IDMuMzkgMy4zOSAwIDAgMC0xLjEzIDF2NC44NmEuNjcuNjcgMCAwIDEtLjIyLjUxLjc5Ljc5IDAgMCAxLS41NS4yMS43Ni43NiAwIDAgMS0uNTMtLjE3em04LjcxIDBhMi4yNiAyLjI2IDAgMCAxLTEtLjg0IDIuMyAyLjMgMCAwIDEgLjYxLTMuMTYgNC45IDQuOSAwIDAgMSAyLjg4LS43aDJ2LS4xM2ExLjkxIDEuOTEgMCAwIDAtLjU0LTEuNTIgMi42MiAyLjYyIDAgMCAwLTEuNzEtLjQ3IDYuMjQgNi4yNCAwIDAgMC0xLjEzLjEgMTAuNzEgMTAuNzEgMCAwIDAtMS4xLjI5aC0uMjJhLjY0LjY0IDAgMCAxLS40NC0uMTcuNjMuNjMgMCAwIDEgLjI1LTEgNy41OSA3LjU5IDAgMCAxIDIuOTEtLjU4IDQgNCAwIDAgMSAyIC40NSAyLjg0IDIuODQgMCAwIDEgMS4xNyAxLjE2IDMuMjUgMy4yNSAwIDAgMSAuMzggMS41NHY0LjUzYS42OC42OCAwIDAgMS0uMjMuNTEuOC44IDAgMCAxLTEuMDggMCAuNjcuNjcgMCAwIDEtLjIyLS41MXYtLjQyYTQuMzQgNC4zNCAwIDAgMS0zLjE2IDEuMjIgMy4zIDMuMyAwIDAgMS0xLjM3LS4zem0zLjM3LTEuMzNhMy45NCAzLjk0IDAgMCAwIDEuMTYtLjg2di0xLjM0aC0xLjgzYy0xLjY5IDAtMi41NC40Mi0yLjU0IDEuMjZhMS4xNyAxLjE3IDAgMCAwIC40Mi45MyAyLjExIDIuMTEgMCAwIDAgMS4zNi4zNSAzLjI3IDMuMjcgMCAwIDAgMS40My0uMzR6bTcuMDYtOC42MWEuNzQuNzQgMCAwIDEtLjI1LS41N3YtLjA2YS43Ni43NiAwIDAgMSAuMjUtLjU4Ljg1Ljg1IDAgMCAxIC42LS4yNGguMWEuODUuODUgMCAwIDEgLjYxLjI0Ljc2Ljc2IDAgMCAxIC4yNS41OHYuMDZhLjc0Ljc0IDAgMCAxLS4yNS41Ny44Ni44NiAwIDAgMS0uNjEuMjVoLS4xYS44Ni44NiAwIDAgMS0uNi0uMjV6bS4xIDkuOTRhLjY3LjY3IDAgMCAxLS4yMi0uNTF2LTYuODZhLjcxLjcxIDAgMCAxIC4yMi0uNTMuNzMuNzMgMCAwIDEgLjU0LS4yMS43NS43NSAwIDAgMSAuNTUuMjEuNjguNjggMCAwIDEgLjIyLjUzdjYuODZhLjY4LjY4IDAgMCAxLS4yMy41MS43Ni43NiAwIDAgMS0uNTQuMjEuNzMuNzMgMCAwIDEtLjU0LS4yMXptNS44NiAwYS43LjcgMCAwIDEtLjIyLS41MXYtNi44NmEuNzUuNzUgMCAwIDEgLjIyLS41My43Ni43NiAwIDAgMSAuNTQtLjIxLjgxLjgxIDAgMCAxIC41NS4yMS43MS43MSAwIDAgMSAuMjIuNTN2LjY1YTUuNzEgNS43MSAwIDAgMSAxLjM4LTEuMDcgMy41OSAzLjU5IDAgMCAxIDEuNzUtLjQgMy4wNyAzLjA3IDAgMCAxIDEuNi40MSAyLjc5IDIuNzkgMCAwIDEgMSAxLjE0IDMuNTEgMy41MSAwIDAgMSAuMzYgMS41OXY0LjU0YS42Ny42NyAwIDAgMS0uMjIuNTEuNzkuNzkgMCAwIDEtLjU1LjIxLjc2Ljc2IDAgMCAxLS41NC0uMjEuNjkuNjkgMCAwIDEtLjIxLS41MXYtNC4zOWMwLTEuMy0uNjItMi0xLjg1LTJhMi43OSAyLjc5IDAgMCAwLTEuNTEuNDIgNS4zOSA1LjM5IDAgMCAwLTEuMjUgMS4xMnY0LjhhLjY3LjY3IDAgMCAxLS4yMi41MS44MS44MSAwIDAgMS0uNTUuMjEuNzYuNzYgMCAwIDEtLjUtLjE2em0xOS4zOS0uMThhMy4wNyAzLjA3IDAgMCAxLTEuMzUtMS4yMyAzLjEyIDMuMTIgMCAwIDEtLjQzLTEuNiAzIDMgMCAwIDEgLjU5LTEuODZBNC45MyA0LjkzIDAgMCAxIDE1Mi43IDcyYTQuOTIgNC45MiAwIDAgMS0uNzctMS4xIDIuODkgMi44OSAwIDAgMSAuMTItMi42MyAyLjczIDIuNzMgMCAwIDEgMS4wOS0xIDMuNTUgMy41NSAwIDAgMSAxLjY3LS4zOCA0LjE2IDQuMTYgMCAwIDEgMi4yNC43MS41LjUgMCAwIDEgLjIxLjIuNDkuNDkgMCAwIDEgLjA5LjI4LjU0LjU0IDAgMCAxLS4xNy4zOS41Ny41NyAwIDAgMS0uNDIuMTcuNzUuNzUgMCAwIDEtLjMtLjA4IDMuNDMgMy40MyAwIDAgMC0xLjU4LS40MiAxLjkgMS45IDAgMCAwLTEuMzIuNDQgMS4zNiAxLjM2IDAgMCAwLS40OCAxIDIuMSAyLjEgMCAwIDAgLjE2LjgyIDIuODggMi44OCAwIDAgMCAuNDguNjljLjIxLjIyLjU2LjU0IDEgMWwzLjUxIDMuMTVhNi4xNSA2LjE1IDAgMCAwIC41Ni0xIC42MS42MSAwIDAgMSAuMjYtLjI5LjY4LjY4IDAgMCAxIC4zOS0uMTEuNzYuNzYgMCAwIDEgLjU2LjE2LjY0LjY0IDAgMCAxIC4xMS43OSA3LjY1IDcuNjUgMCAwIDEtLjggMS4zMWwxLjEyIDFhMS4wNyAxLjA3IDAgMCAxIC4yMS4yMi42Mi42MiAwIDAgMSAuMDYuMjkuNjMuNjMgMCAwIDEtLjE4LjQ2LjY2LjY2IDAgMCAxLS41MS4yLjc3Ljc3IDAgMCAxLS41Mi0uMmwtMS4xMi0xYTUuNzYgNS43NiAwIDAgMS0xLjYuOTEgNSA1IDAgMCAxLTEuODUuMzQgNS4xNCA1LjE0IDAgMCAxLTIuMzQtLjQ0em00Ljc5LTEuNjZsLTMuNzUtMy4zNGEzLjI0IDMuMjQgMCAwIDAtMSAuOTEgMi4xNyAyLjE3IDAgMCAwLS40MSAxLjMxIDEuNzggMS43OCAwIDAgMCAuNzMgMS40NSAyLjg2IDIuODYgMCAwIDAgMS44MS41NyA0LjE0IDQuMTQgMCAwIDAgMi42Mi0uOXptMTUuMTYgMS42M2EzLjkgMy45IDAgMCAxLTEuNTMtMS40OCA0LjY5IDQuNjkgMCAwIDEgMC00LjUyIDMuOSAzLjkgMCAwIDEgMS41MS0xLjQ4IDQuMTUgNC4xNSAwIDAgMSAyLS41IDQgNCAwIDAgMSAyLjg4IDEuMjJ2LTMuOTNhLjY3LjY3IDAgMCAxIC4yMi0uNTIuNzcuNzcgMCAwIDEgLjU1LS4yMS43My43MyAwIDAgMSAuNTQuMjIuNjkuNjkgMCAwIDEgLjIxLjUxdjEwLjM5YS42OS42OSAwIDAgMS0uMjEuNTEuODEuODEgMCAwIDEtMS4wOSAwIC42Ny42NyAwIDAgMS0uMjItLjUxdi0uNDJhNCA0IDAgMCAxLTIuODggMS4yMiA0LjE1IDQuMTUgMCAwIDEtMS45OC0uNXptMy42NC0xLjE5YTQuMiA0LjIgMCAwIDAgMS4yMS0uODd2LTMuMzZhNC4yIDQuMiAwIDAgMC0xLjIxLS44NyAzLjI1IDMuMjUgMCAwIDAtMS40NS0uMzMgMi43MSAyLjcxIDAgMCAwLTIgLjc1IDMuNCAzLjQgMCAwIDAgMCA0LjI2IDIuNzEgMi43MSAwIDAgMCAyIC43NSAzLjI1IDMuMjUgMCAwIDAgMS40NS0uMzN6bTcuMTktOC41NGEuNzUuNzUgMCAwIDEtLjI2LS41N3YtLjA2YS43Ny43NyAwIDAgMSAuMjYtLjU4LjgzLjgzIDAgMCAxIC42LS4yNGguMWEuODUuODUgMCAwIDEgLjYxLjI0Ljc5Ljc5IDAgMCAxIC4yNS41OHYuMDZhLjc3Ljc3IDAgMCAxLS4yNS41Ny44Ni44NiAwIDAgMS0uNjEuMjVIMTg0YS44NC44NCAwIDAgMS0uNjQtLjI1em0uMSA5Ljk0YS42Ny42NyAwIDAgMS0uMjItLjUxdi02Ljg2YS43MS43MSAwIDAgMSAuMjItLjUzLjcyLjcyIDAgMCAxIC41NC0uMTYuNzguNzggMCAwIDEgLjU2LjIxLjcyLjcyIDAgMCAxIC4yMi41M3Y2Ljg2YS42OC42OCAwIDAgMS0uMjMuNTEuNzcuNzcgMCAwIDEtLjU1LjIxLjcyLjcyIDAgMCAxLS41NC0uMjZ6bTYuNTQgMGEuNjcuNjcgMCAwIDEtLjIyLS41MXYtNi4yN2gtMWEuNi42IDAgMCAxLS40Ni0uMTkuNi42IDAgMCAxIDAtLjg5LjY3LjY3IDAgMCAxIC40Ni0uMTdoMXYtLjkzYTMuMDcgMy4wNyAwIDAgMSAuMzYtMS41NyAyLjIgMi4yIDAgMCAxIC45NC0uOSAyLjczIDIuNzMgMCAwIDEgMS4yMi0uMjggMy4zOSAzLjM5IDAgMCAxIDEuNDYuMzIuNy43IDAgMCAxIC4yOC4yMy41Ny41NyAwIDAgMSAuMTEuMzMuNTUuNTUgMCAwIDEtLjE5LjQyLjU3LjU3IDAgMCAxLS40My4xOSAxLjc0IDEuNzQgMCAwIDEtLjM5IDBsLS40NS0uMDVhMS41IDEuNSAwIDAgMC0xIC4zMSAxLjQyIDEuNDIgMCAwIDAtLjM0IDEuMXYuOGgyLjFhLjY4LjY4IDAgMCAxIC40Ny4xNy42MS42MSAwIDAgMSAuMTguNDUuNi42IDAgMCAxLS4xOC40NC42MS42MSAwIDAgMS0uNDcuMTloLTIuMXY2LjI3YS42OC42OCAwIDAgMS0uMjMuNTEuNzYuNzYgMCAwIDEtLjU0LjIxLjczLjczIDAgMCAxLS41OC0uMTh6bTcuODkgMGEuNjcuNjcgMCAwIDEtLjIyLS41MXYtNi4yN2gtMWEuNi42IDAgMCAxLS40Ni0uMTkuNi42IDAgMCAxIDAtLjg5LjY3LjY3IDAgMCAxIC40Ni0uMTdoMXYtLjkzYTMuMDcgMy4wNyAwIDAgMSAuMzYtMS41NyAyLjIgMi4yIDAgMCAxIC45NC0uOSAyLjczIDIuNzMgMCAwIDEgMS4yMi0uMjggMy40MiAzLjQyIDAgMCAxIDEuNDYuMzIuNzcuNzcgMCAwIDEgLjI4LjIzLjU3LjU3IDAgMCAxIC4xMS4zMy41OS41OSAwIDAgMS0uMTkuNDIuNTguNTggMCAwIDEtLjQ0LjE5IDEuNzMgMS43MyAwIDAgMS0uMzggMGwtLjQ2LS4wNWExLjQ5IDEuNDkgMCAwIDAtMSAuMzEgMS40MiAxLjQyIDAgMCAwLS4zNCAxLjF2LjhoMi4xYS43LjcgMCAwIDEgLjQ3LjE3LjYxLjYxIDAgMCAxIC4xOC40NS42LjYgMCAwIDEtLjE4LjQ0LjYzLjYzIDAgMCAxLS40Ny4xOWgtMi4xdjYuMjdhLjY4LjY4IDAgMCAxLS4yMy41MS43Ny43NyAwIDAgMS0uNTUuMjEuNzIuNzIgMCAwIDEtLjU2LS4xOHptNy4zOC0uODJhNC4xNCA0LjE0IDAgMCAxLTEuMTUtMy4xMyA1IDUgMCAwIDEgLjQ0LTIuMSAzLjY1IDMuNjUgMCAwIDEgMS4zNC0xLjU1IDQuNTEgNC41MSAwIDAgMSA0LjM5IDAgMy42NSAzLjY1IDAgMCAxIDEuMzcgMS40NyA0LjMxIDQuMzEgMCAwIDEgLjQ3IDIgLjY4LjY4IDAgMCAxLS4yMS41MS43NS43NSAwIDAgMS0uNTYuMjFoLTUuNjlhMi42MSAyLjYxIDAgMCAwIC44NyAxLjc1IDMuMTQgMy4xNCAwIDAgMCAyLjA3LjYyIDUgNSAwIDAgMCAxLjIzLS4xMyA0Ljg4IDQuODggMCAwIDAgMS0uMzcuNzUuNzUgMCAwIDEgLjMxLS4wNi43MS43MSAwIDAgMSAuNDcuMTguNTYuNTYgMCAwIDEgLjIuNDQuNy43IDAgMCAxLS40NC42IDUuNTcgNS41NyAwIDAgMS0yLjk0LjcgNC40MiA0LjQyIDAgMCAxLTMuMTctMS4xNHptNS4zNS0zLjhhMi40MSAyLjQxIDAgMCAwLS40My0xLjMyIDIuMjIgMi4yMiAwIDAgMC0uOTMtLjc3IDIuNjYgMi42NiAwIDAgMC0yLjI1IDAgMi4xNCAyLjE0IDAgMCAwLS45Mi43NyAyLjQ5IDIuNDkgMCAwIDAtLjQyIDEuMzJ6bTUuNDMgNC42MmEuNjcuNjcgMCAwIDEtLjIyLS41MXYtNi44NmEuNzEuNzEgMCAwIDEgLjIyLS41My43My43MyAwIDAgMSAuNTQtLjIxLjc2Ljc2IDAgMCAxIC41NC4yMS43Mi43MiAwIDAgMSAuMjMuNTN2LjY4YTMuMzQgMy4zNCAwIDAgMSAyLjY0LTEuNWguMDhhLjcyLjcyIDAgMCAxIC41My4yMS42OS42OSAwIDAgMSAuMjEuNTEuNjMuNjMgMCAwIDEtLjIyLjUuODMuODMgMCAwIDEtLjU1LjE5SDIyMGEzIDMgMCAwIDAtMS40OC4zNyAzLjM2IDMuMzYgMCAwIDAtMS4xMiAxdjQuODZhLjY4LjY4IDAgMCAxLS4yMy41MS43Ni43NiAwIDAgMS0uNTQuMjEuNzMuNzMgMCAwIDEtLjU4LS4xN3ptOC4yNy0uODJhNC4xNCA0LjE0IDAgMCAxLTEuMTUtMy4xMyA1IDUgMCAwIDEgLjQ0LTIuMSAzLjY1IDMuNjUgMCAwIDEgMS4zOS0xLjU1IDQuNTEgNC41MSAwIDAgMSA0LjM5IDAgMy42NSAzLjY1IDAgMCAxIDEuMzcgMS40NyA0LjMxIDQuMzEgMCAwIDEgLjQ3IDIgLjY4LjY4IDAgMCAxLS4yMS41MS43NS43NSAwIDAgMS0uNTYuMjFoLTUuNjlhMi42MSAyLjYxIDAgMCAwIC44NyAxLjc1IDMuMTQgMy4xNCAwIDAgMCAyLjA3LjYyIDUgNSAwIDAgMCAxLjIzLS4xMyA0Ljg4IDQuODggMCAwIDAgMS0uMzcuNzUuNzUgMCAwIDEgLjMxLS4wNi42OS42OSAwIDAgMSAuNDcuMTguNTYuNTYgMCAwIDEgLjIuNDQuNy43IDAgMCAxLS40NC42IDYgNiAwIDAgMS0xLjI5LjUyIDYuMjggNi4yOCAwIDAgMS0xLjY1LjE4IDQuNDMgNC40MyAwIDAgMS0zLjIyLTEuMTR6bTUuMzUtMy44YTIuNDEgMi40MSAwIDAgMC0uNDMtMS4zMiAyLjIyIDIuMjIgMCAwIDAtLjkzLS43NyAyLjY0IDIuNjQgMCAwIDAtMS4xMi0uMjUgMi42OSAyLjY5IDAgMCAwLTEuMTMuMjUgMi4xNCAyLjE0IDAgMCAwLS45Mi43NyAyLjQ5IDIuNDkgMCAwIDAtLjQyIDEuMzJ6bTUuNDMgNC42MmEuNjcuNjcgMCAwIDEtLjIyLS41MXYtNi44NmEuNzEuNzEgMCAwIDEgLjIyLS41My43NS43NSAwIDAgMSAuNTQtLjIxLjc2Ljc2IDAgMCAxIC41NC4yMS43Mi43MiAwIDAgMSAuMjMuNTN2LjY1YTUuNTIgNS41MiAwIDAgMSAxLjM4LTEuMDcgMy41NSAzLjU1IDAgMCAxIDEuNzQtLjQgMy4wOCAzLjA4IDAgMCAxIDEuNjEuNDEgMi43OSAyLjc5IDAgMCAxIDEgMS4xNCAzLjUxIDMuNTEgMCAwIDEgLjM2IDEuNTl2NC41NGEuNjQuNjQgMCAwIDEtLjIzLjUxLjguOCAwIDAgMS0xLjA4IDAgLjcuNyAwIDAgMS0uMjItLjUxdi00LjM5YzAtMS4zLS42MS0yLTEuODQtMmEyLjc0IDIuNzQgMCAwIDAtMS41MS40MiA1LjM5IDUuMzkgMCAwIDAtMS4yNSAxLjEydjQuOGEuNjguNjggMCAwIDEtLjIzLjUxLjc2Ljc2IDAgMCAxLS41NC4yMS43NS43NSAwIDAgMS0uNS0uMTZ6bTEzLjQyLS4yMmE0IDQgMCAwIDEtMS42My0xLjQ3IDQuNDMgNC40MyAwIDAgMSAwLTQuNTIgNCA0IDAgMCAxIDEuNjMtMS40NyA1IDUgMCAwIDEgMi4yNC0uNTEgNC42NiA0LjY2IDAgMCAxIDEuNTMuMjIgNS41NCA1LjU0IDAgMCAxIDEuMjEuNTUuNjMuNjMgMCAwIDEgLjMzLjU2LjY3LjY3IDAgMCAxLS42NC42NC43Ni43NiAwIDAgMS0uMzctLjEgNi40IDYuNCAwIDAgMC0uOTUtLjM5IDMuNCAzLjQgMCAwIDAtMS0uMTIgMy4xNCAzLjE0IDAgMCAwLTIuMjcuNzkgMy4wNyAzLjA3IDAgMCAwIDAgNC4xOCAzLjE0IDMuMTQgMCAwIDAgMi4yNy43OSAzLjQgMy40IDAgMCAwIDEtLjEyIDYuNCA2LjQgMCAwIDAgLjk1LS4zOS43Ni43NiAwIDAgMSAuMzctLjEuNjIuNjIgMCAwIDEgLjQ1LjIuNjEuNjEgMCAwIDEgLjE5LjQ0LjYzLjYzIDAgMCAxLS4zMy41NiA1LjU0IDUuNTQgMCAwIDEtMS4yMS41NSA0LjY2IDQuNjYgMCAwIDEtMS41My4yMiA1IDUgMCAwIDEtMi4yNC0uNTF6bTkuNDgtLjZhNC4xNCA0LjE0IDAgMCAxLTEuMTUtMy4xMyA1IDUgMCAwIDEgLjQzLTIuMSAzLjY3IDMuNjcgMCAwIDEgMS4zNS0xLjU1IDQuNDkgNC40OSAwIDAgMSA0LjM4IDAgMy42MSAzLjYxIDAgMCAxIDEuMzggMS40NyA0LjQ0IDQuNDQgMCAwIDEgLjQ3IDIgLjY4LjY4IDAgMCAxLS4yMS41MS43Ni43NiAwIDAgMS0uNTYuMjFoLTUuN2EyLjU4IDIuNTggMCAwIDAgLjg4IDEuNzUgMy4xMyAzLjEzIDAgMCAwIDIuMDYuNjIgNS4wOCA1LjA4IDAgMCAwIDEuMjQtLjEzIDQuODggNC44OCAwIDAgMCAxLS4zNy43My43MyAwIDAgMSAuMy0uMDYuNjcuNjcgMCAwIDEgLjQ3LjE4LjU0LjU0IDAgMCAxIC4yMS40NC43LjcgMCAwIDEtLjQ0LjYgNS41NyA1LjU3IDAgMCAxLTIuOTQuNyA0LjQyIDQuNDIgMCAwIDEtMy4xNy0xLjE0em01LjM1LTMuOGEyLjUgMi41IDAgMCAwLS40My0xLjMyIDIuMjIgMi4yMiAwIDAgMC0uOTMtLjc3IDIuNjkgMi42OSAwIDAgMC0xLjEzLS4yNSAyLjY0IDIuNjQgMCAwIDAtMS4xMi4yNSAyLjIyIDIuMjIgMCAwIDAtLjkzLjc3IDIuNjggMi42OCAwIDAgMC0uNDIgMS4zMnpNNTcuMzEgNS40YTI5LjM3IDI5LjM3IDAgMCAxLS44NiAyNy4yN2MtMi4yMyAzLjg1LTMuNiA0LjkyLTYuNzMgNS4xN2EyNS4xMyAyNS4xMyAwIDAgMS05LjY0LTEuNjFjLTIuNjktMS4xNi0zLjgxLTMuMTUtNC41Ni04LjE0QzMzLjY2IDE1Ljg3IDQwLjI1IDEuNTIgNDguMjcuMzVjMy44Mi0uNTYgNy4xNSAxLjI5IDkuMDQgNS4wNXoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0uMjUgLS4yNSkiLz48cGF0aCBkPSJNNTMuNCA0My4zNGMxLjEzIDEuNDkuMzggNS43NC0xLjU0IDguNjUtMi41MiAzLjgxLTYuNDIgNS41Mi0xMC41MSA0LjYtNS43Ny0xLjI3LTkuMy05LjEtNi42Ny0xNC43NGEyLjE3IDIuMTcgMCAwIDEgMS42Ni0xLjM5Yy44OS0uMjUgMi43NS0uMDUgNS41My41NmEyNy40MSAyNy40MSAwIDAgMCA0LjIyLjY4YzUuMzguNiA2Ljc1LjkgNy4zMSAxLjY0eiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLS4yNSAtLjI1KSIgZmlsbD0iI2ZmODgxNiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTI4LjMzIDYyLjQ4YzEuMjkgNi41Mi0yLjIzIDEyLjY1LTcuODcgMTMuNjFDMTUgNzcgOS4yNiA3MiA4LjcgNjUuNzljLS4yMi0yLjI4LjIyLTMuMTQgMi0zLjg0YTE5LjgxIDE5LjgxIDAgMCAxIDQuNzItMSA0NS43NyA0NS43NyAwIDAgMCA1LjQ2LTEuMjQgMjMuNDQgMjMuNDQgMCAwIDEgMi45Mi0uNjlsLjYzLS4xYzIuMDUtLjMzIDMuMzYuODQgMy45IDMuNTZ6bS0yLjU3LTIyLjMzYzEgOC4wOC0uNjMgMTMuMzUtNC44OSAxNS4zNy02LjYxIDMuMTUtMTEuNTIgMi43OC0xNC40MS0xLjA4YTMxLjQ2IDMxLjQ2IDAgMCAxLTYuMTUtMjBjLjU4LTcuNzcgNC41NS0xMy45MyA5LjM4LTE0LjUgNi45NS0uODUgMTQuNiA4Ljc3IDE2LjA3IDIwLjIxek05MyA1MS43YTEuNzEgMS43MSAwIDAgMS0uNTItMS4yOFYyNS45NGExLjggMS44IDAgMCAxIC41Mi0xLjMgMS42OSAxLjY5IDAgMCAxIDEuMjgtLjU0aDE1LjUyYTEuNzEgMS43MSAwIDAgMSAxLjcyIDEuNzJBMS42MSAxLjYxIDAgMCAxIDExMSAyN2ExLjcxIDEuNzEgMCAwIDEtMS4yMi40OGgtMTMuN3Y4Ljg0aDEyLjMyYTEuNzEgMS43MSAwIDAgMSAxLjcyIDEuNzIgMS42MSAxLjYxIDAgMCAxLS41IDEuMiAxLjcxIDEuNzEgMCAwIDEtMS4yMi40OEg5Ni4wOHYxMC43YTEuNjkgMS42OSAwIDAgMS0uNTQgMS4yOCAxLjggMS44IDAgMCAxLTEuMy41MkExLjcxIDEuNzEgMCAwIDEgOTMgNTEuN3ptMjkuMzggMGE1LjY0IDUuNjQgMCAwIDEtMi4zOC0yLjEgNS43NiA1Ljc2IDAgMCAxLS44OC0zLjE4IDUuNjIgNS42MiAwIDAgMSAyLjM0LTQuNzJjMS41Ni0xLjE3IDMuODQtMS43NiA2Ljg2LTEuNzZoNC44NHYtLjMyYTQuOSA0LjkgMCAwIDAtMS4zLTMuOCA2IDYgMCAwIDAtNC4wNi0xLjE2IDEzLjU0IDEzLjU0IDAgMCAwLTIuNy4yNCAyMi40OCAyMi40OCAwIDAgMC0yLjYyLjcyIDIgMiAwIDAgMS0uNTIuMDggMS4zOSAxLjM5IDAgMCAxLTEtLjQ0IDEuNDMgMS40MyAwIDAgMS0uNDQtMS4wOCAxLjU0IDEuNTQgMCAwIDEgMS0xLjUyIDE3LjU2IDE3LjU2IDAgMCAxIDYuOTItMS40NCA5LjExIDkuMTEgMCAwIDEgNC42NiAxLjEyIDcuMTQgNy4xNCAwIDAgMSAyLjggMi45IDguNDYgOC40NiAwIDAgMSAuOSAzLjg2djExLjMyYTEuNjkgMS42OSAwIDAgMS0uNTQgMS4yOCAxLjggMS44IDAgMCAxLTEuMy41MiAxLjc4IDEuNzggMCAwIDEtMS44LTEuOHYtMWExMCAxMCAwIDAgMS03LjUyIDMgNy40MSA3LjQxIDAgMCAxLTMuMjYtLjcyem04LTMuMzRhOS4zNyA5LjM3IDAgMCAwIDIuNzYtMi4xNHYtMy4zNmgtNC4zNGMtNCAwLTYgMS4wNi02IDMuMTZhMi45NCAyLjk0IDAgMCAwIDEgMi4zMiA0LjgyIDQuODIgMCAwIDAgMy4yNi44OCA3LjE4IDcuMTggMCAwIDAgMy4zNC0uODZ6TTE1MSA0OS4zOHYxYTEuNjkgMS42OSAwIDAgMS0uNTQgMS4yOCAxLjc3IDEuNzcgMCAwIDEtMS4zLjUyIDEuNzggMS43OCAwIDAgMS0xLjgtMS44di0yNmExLjg1IDEuODUgMCAwIDEgLjUyLTEuMyAxLjcyIDEuNzIgMCAwIDEgMS4yOC0uNTQgMS43OCAxLjc4IDAgMCAxIDEuODQgMS45MnY5LjhhOS4yMyA5LjIzIDAgMCAxIDYuODQtMyA5LjM2IDkuMzYgMCAwIDEgNC43IDEuMjYgOS42OCA5LjY4IDAgMCAxIDMuNjEgMy42OCAxMS4zNSAxMS4zNSAwIDAgMSAxLjM3IDUuNjYgMTEuMzIgMTEuMzIgMCAwIDEtMS4zNyA1LjY2IDkuNjEgOS42MSAwIDAgMS0zLjYxIDMuNjggOS4zNiA5LjM2IDAgMCAxLTQuNyAxLjI2IDkuMTkgOS4xOSAwIDAgMS02Ljg0LTMuMDh6bTExLTIuMjRhNy4zNyA3LjM3IDAgMCAwIDEuOC01LjMyIDcuNCA3LjQgMCAwIDAtMS44LTUuMzIgNi4yOSA2LjI5IDAgMCAwLTQuNzYtMS44OCA3LjY2IDcuNjYgMCAwIDAtMy40Ni44MiAxMC4xMSAxMC4xMSAwIDAgMC0yLjc4IDIuMThWNDZhOS43NSA5Ljc1IDAgMCAwIDIuODYgMi4xOCA3LjUzIDcuNTMgMCAwIDAgMy40Ni44MiA2LjI1IDYuMjUgMCAwIDAgNC42OC0xLjg2em0xOC42IDIuMjR2MWExLjY5IDEuNjkgMCAwIDEtLjU0IDEuMjggMS44IDEuOCAwIDAgMS0xLjMuNTIgMS43NiAxLjc2IDAgMCAxLTEuOC0xLjh2LTI2YTEuODQgMS44NCAwIDAgMSAuNTEtMS4zIDEuNzMgMS43MyAwIDAgMSAxLjI5LS41NCAxLjc4IDEuNzggMCAwIDEgMS44NCAxLjg0djkuOGE5LjE5IDkuMTkgMCAwIDEgNi44My0zIDkuNCA5LjQgMCAwIDEgNC43MSAxLjI2IDkuNjUgOS42NSAwIDAgMSAzLjYgMy42OCAxMS4yNSAxMS4yNSAwIDAgMSAxLjM4IDUuNjYgMTEuMjIgMTEuMjIgMCAwIDEtMS4zOCA1LjY2IDkuNTggOS41OCAwIDAgMS0zLjYgMy42OCA5LjQgOS40IDAgMCAxLTQuNzEgMS4yNiA5LjE1IDkuMTUgMCAwIDEtNi44My0zem0xMS4wOC0yLjI0YTcuMzcgNy4zNyAwIDAgMCAxLjc5LTUuMzIgNy40IDcuNCAwIDAgMC0xLjc5LTUuMzIgNi4zMiA2LjMyIDAgMCAwLTQuNzYtMS44OCA3LjYzIDcuNjMgMCAwIDAtMy40Ni44MiAxMCAxMCAwIDAgMC0yLjg2IDIuMThWNDZhOS42MiA5LjYyIDAgMCAwIDIuODYgMi4xOCA3LjUgNy41IDAgMCAwIDMuNDYuODIgNi4yOCA2LjI4IDAgMCAwIDQuNzYtMS44NnptMTUuMi0yMC4yOGExLjk0IDEuOTQgMCAwIDEtLjYxLTEuNDR2LS4xNmEyLjA3IDIuMDcgMCAwIDEgMi0yaC4yNWExLjk0IDEuOTQgMCAwIDEgMS40My42IDIgMiAwIDAgMSAuNjEgMS40NHYuMTZhMiAyIDAgMCAxLS42MSAxLjQ0IDEuOTQgMS45NCAwIDAgMS0xLjQzLjZoLS4yNWExLjk0IDEuOTQgMCAwIDEtMS4zOS0uNjR6bS4yMyAyNC44NGExLjc0IDEuNzQgMCAwIDEtLjUxLTEuMjhWMzMuMjZhMS44NCAxLjg0IDAgMCAxIC41MS0xLjMgMS43MiAxLjcyIDAgMCAxIDEuMjgtLjU0IDEuNzYgMS43NiAwIDAgMSAxLjg0IDEuODR2MTcuMTZhMS42NiAxLjY2IDAgMCAxLS41NCAxLjI4IDEuNzcgMS43NyAwIDAgMS0xLjMuNTIgMS43NCAxLjc0IDAgMCAxLTEuMjgtLjUyeiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLS4yNSAtLjI1KSIvPjwvZz48L2c+PC9nPjwvc3ZnPg==">

            </div>
            <div class="card-body">
                <form action="sign_in" method="post" name="myForm" action="process-action.html" onsubmit = "return validateForm()">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="username" name="username" id="username" value ="" required>

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control"
                               placeholder="password" name="password" id="password" value ="" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Login"
                               class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center">
                    <a href="#">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
