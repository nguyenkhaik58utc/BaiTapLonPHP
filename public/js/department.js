function removeElement(array, elem) {
    var index = array.indexOf(elem);
    if (index > -1) {
        array.splice(index, 1);
    }
    return array;
}

function checkId(arr, id) {
    var check = 0;
    for (var i = 0; i < arr.length; i++) {
        if (id == arr[i]) {
            check = 1;
            break;
        } else {
            check = 0;
        }
    }
    return check;
}

function getEmpByDepartment(depId, parentid) {
    $.ajax({
        type: 'GET',
        url: '/getEmpByDepartment',
        data: {
            depId: depId,
            parentid: parentid
        },
        success: function (data) {
            var db = "";
            for (var i = 0; i < data.length; i++) {
                db += "<tr ><td >"
                    + data[i].id
                    + "</td><td class='data-edit regis-date' contenteditable='true'>"
                    + data[i].nameEmp
                    + "</td><td>"
                    + data[i].email
                    + "</td></tr><hr>";
            }
            $('#getEmpByDepartment').html(db);
        }
    });
}

function getEmpByTitle(titleId) {
    $.ajax({
        type: 'GET',
        url: '/getEmpByTitle',
        data: {
            titleId: titleId
        },
        success: function (data) {
            var db = "";
            for (var i = 0; i < data.length; i++) {
                db += "<tr ><td >"
                    + data[i].id
                    + "</td><td class='data-edit regis-date' contenteditable='true'>"
                    + data[i].nameEmp
                    + "</td><td>"
                    + data[i].email
                    + "</td></tr><hr>";
            }
            $('#getEmpByDepartment').html(db);
        }
    });
}

$(document).ready(function () {

    var lstDiv = new Array();

    $.ajax({
        type: 'GET',
        url: '/getEmpByReady',
        success: function (data) {
            var db = "";
            for (var i = 0; i < data.length; i++) {
                db += "<tr ><td >"
                    + data[i].id
                    + "</td><td class='data-edit regis-date' contenteditable='true'>"
                    + data[i].nameEmp
                    + "</td><td>"
                    + data[i].email
                    + "</td></tr><hr>";
            }
            $('#getEmpByDepartment').html(db);
        }
    });

    $('#numberNoti').text(Math.floor(Math.random() * 11));

    $.ajax({
        type: 'GET',
        url: '/getDepartment',
        success: function (data) {
            var db = "";
            var lstFarent = new Array();
            for (var i = 0; i < data.length; i++) {
                lstFarent.push(data[i].id);
            }
            var setLst = Array.from(new Set(lstFarent));
            var lstParentSort = removeElement(setLst, 0).sort(function (a, b) {
                return a - b;
            });
            db += "<ul ><li><a onclick='getEmpByDepartment(1,0)'  class='caret1'>Công ty Kdas</a>\n" +
                "    <ul>";
            for (var i = 0; i < lstParentSort.length; i++) {
                for (var j = 0; j < data.length; j++) {
                    if (data[j].id == lstParentSort[i]) {
                        db += "<li class='myLi'><a onclick='getEmpByDepartment(" + data[j].id + "," + data[j].parentid + ")'> " + data[j].nameDep + " </a></li>";
                        for (var cursor = 0; cursor < data.length; cursor++) {
                            if (data[cursor].id == data[j].id) {
                                db += "<li style='margin-left: 60px; font-size: 16px'><a onclick='getEmpByTitle(" + data[cursor].idTitle + ")'> " + data[cursor].nameTitle + " </a></li>";
                            }
                        }
                        break;
                    }
                }
            }
            db += "</ul></li></ul>";
            $('#dataOganization').html(db);
        }
    });
});


