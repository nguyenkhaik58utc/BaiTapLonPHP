$(function () {
    $('#excelfile').on('change', function () {
        $("#excelfile").attr('disabled','disabled');
        $('#tinhluong').removeAttr('disabled');
        ExportToTable();
    });

    $( "#cancelTotal" ).click(function() {
        $('input[type="file"]').val("");
        $("#exceltable tr").remove();
        $("#tinhluong").attr('disabled','disabled');
        $('input[type="file"]').removeAttr('disabled');
    });
});



function ExportToTable() {
    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.xlsx|.xls)$/;
    /*Checks whether the file is a valid excel file*/
    if (regex.test($("#excelfile").val().toLowerCase())) {
        var xlsxflag = false; /*Flag for checking whether excel is .xls format or .xlsx format*/
        if ($("#excelfile").val().toLowerCase().indexOf(".xlsx") > 0) {
            xlsxflag = true;
        }
        /*Checks whether the browser supports HTML5*/
        if (typeof (FileReader) != "undefined") {
            var reader = new FileReader();
            reader.onload = function (e) {
                var data = e.target.result;
                /*Converts the excel data in to object*/
                if (xlsxflag) {
                    var workbook = XLSX.read(data, {type: 'binary'});
                } else {
                    var workbook = XLS.read(data, {type: 'binary'});
                }
                /*Gets all the sheetnames of excel in to a variable*/
                var sheet_name_list = workbook.SheetNames;

                var cnt = 0; /*This is used for restricting the script to consider only first sheet of excel*/
                sheet_name_list.forEach(function (y) { /*Iterate through all sheets*/
                    /*Convert the cell value to Json*/
                    if (xlsxflag) {
                        var exceljson = XLSX.utils.sheet_to_json(workbook.Sheets[y]);
                    } else {
                        var exceljson = XLS.utils.sheet_to_row_object_array(workbook.Sheets[y]);
                    }
                    if (exceljson.length > 0 && cnt == 0) {
                        BindTable(exceljson, '#exceltable');
                        cnt++;
                    }
                });
                $('#exceltable').show();
            }
            if (xlsxflag) {/*If excel file is .xlsx extension than creates a Array Buffer from excel*/
                reader.readAsArrayBuffer($("#excelfile")[0].files[0]);
            } else {
                reader.readAsBinaryString($("#excelfile")[0].files[0]);
            }
        } else {
            alert("Sorry! Your browser does not support HTML5!");
        }
    } else {
        alert("Please upload a valid Excel file!");
    }
}

function BindTable(jsondata, tableid) {/*Function used to convert the JSON array to Html Table*/
    var columns = BindTableHeader(jsondata, tableid); /*Gets all the column headings of Excel*/
    for (var i = 0; i < jsondata.length; i++) {
        var row$ = $('<tr/>');
        for (var colIndex = 0; colIndex < columns.length; colIndex++) {
            var cellValue = jsondata[i][columns[colIndex]];
            if (cellValue == null)
                cellValue = "";
            row$.append($('<td/>').html(cellValue));
        }
        $(tableid).append(row$);
    }
}

function BindTableHeader(jsondata, tableid) {/*Function used to get all column names from JSON and bind the html table header*/
    var columnSet = [];
    var headerTr$ = $('<tr/>');
    for (var i = 0; i < jsondata.length; i++) {
        var rowHash = jsondata[i];
        for (var key in rowHash) {
            if (rowHash.hasOwnProperty(key)) {
                if ($.inArray(key, columnSet) == -1) {/*Adding each unique column names to a variable array*/
                    columnSet.push(key);
                    headerTr$.append($('<th/>').html(key));
                }
            }
        }
    }
    $(tableid).append(headerTr$);
    return columnSet;
}


function TinhLuong() {
    var arrayCur = new Array();
    $("#exceltable tr").each(function (i0) {
        var arrTemp = new Array();
        $(this).find("td").each(function (i1) {
            arrTemp[i1] = $(this).html();
        });
        arrayCur.push(arrTemp);
    });
    $.ajax({
        url: "/updateSalary",
        type: "Get",
        data: {
            arr: arrayCur
        },
        success: function (data) {
            localStorage.setItem("swal",
                swal({
                    title: "Success!",
                    text: "Message sent",
                    type: "success",
                    timer: 800,
                    showConfirmButton: false
                })
                );
            window.setTimeout(function () {
                location.reload();
            }, 800);
        },
        error: function () {
            swal("Error", "Your imaginary file is safe :)", "error");
        }
    });

}

$(document).ready(function () {

    var current = new Date();
    var month = current.getMonth() + 1;
    var year = current.getFullYear();
    document.getElementById("start").value = year + "-" + month;

    getDataTimekeeping(month, year);

    $("#start").change(function () {
        var x = document.getElementById("start").value;
        var time = x.split("-");
        getDataTimekeeping(time[1], time[0]);
    });
});

function getDataTimekeeping(month, year) {
    $.ajax({
        url: "/geDataTimeKeeping",
        type: "Get",
        data: {
            month: month,
            year: year
        },
        success: function (data) {
            var db = "";
            for (var i = 0; i < data.length; i++) {
                db += "<tr ><td hidden>"
                    + data[i].id
                    + "</td><td>"
                    + data[i].timekeepingDate
                    + "</td><td>"
                    + data[i].timeStartAM
                    + "</td><td>"
                    + data[i].timeFinishAM
                    + "</td><td>"
                    + data[i].timeStartPM
                    + "</td><td>"
                    + data[i].timeFinishPM
                    + "</td><td>"
                    + data[i].timeStartOT
                    + "</td><td>"
                    + data[i].timeFinishOT
                    + "</td></tr><hr>";
            }
            $('#dataTimeKeeping').html(db);
        },
        error: function () {
            swal("Error", "Your imaginary file is safe :)", "error");
        }
    });
}
