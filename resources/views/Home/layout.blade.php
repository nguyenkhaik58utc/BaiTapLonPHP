<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="{{ URL::asset('js/lock.js') }}"></script>
    <script src="{{ URL::asset('js/menu.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lock.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/menu.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/410ba3b69f.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link data-semver="0.4.2" rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>

</head>
<body>
<section class="clearfix screen-mainmenu">
    <div class="container-fluid" style="margin-top: 110px;">
        <div class="row">
            <!-- LeftMain -->
            <div id="leftMain" class="col-sm-2 screen-leftmenu"
                 style="position: fixed;border-right:dashed;background-color:#111;min-height:400px">
                <div style="margin-top: 2em" id="dataMenu">

                </div>
            </div>
            <!-- Rightmain -->
            <div id="rightMain" class="col-sm-10 screen-rightmenu"
                 style="background-color:aliceblue;min-height:400px;float:right">
                @yield('NoiDung')
            </div>

        </div>
    </div>
</section>
<div>
    <nav class="navbar navbar-expand-sm "
         style="background-image: url('https://img2.thuthuatphanmem.vn/uploads/2018/11/30/hinh-nen-may-trang-dep_104324872.jpg'); top: 0px; position: fixed; width: 100%">
        <ul class="navbar-nav justify-content-end" style="float:right">
            <li>
                <div id="vnclock" align="center" style="margin-right:20px; margin-top:10px "></div>
            </li>
            <li>
                <a href="home">
                    <img src="https://www.upsieutoc.com/images/2020/10/30/logoPage2.png" alt="logo2.png" border="0" style="height:100px" onclick="homePage()"/>
                </a>
            </li>
        </ul>
    </nav>
</div>
<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>
</body>
</html>
