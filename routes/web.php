<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades;


//Login
Route::get('/', function () {
    return view('Login.LoginPage');
});

Route::get('/logout', function () {
    Facades\Session::flush();
    return view('Login.LoginPage');
});
Route::get('/Home', function () {
    return view('Home.layout');
});


Route::get('/scrum', function () {
    if (Facades\Session::get("id") != null)
        return view('Scrum.Scrum');
    else
        return view('Login.LoginPage');
});

Route::get('/getFormChange', function () {
    if (Facades\Session::get("id") != null)
        return view('Login.ChangePassword');
    else
        return view('Login.LoginPage');
});

Route::Get("/getHome", 'LoginController@Home');

Route::Get("/Change", "LoginController@ChangePW");

//Menu
Route::get("/getMenu", "MenuController@getMenu");

//Salary
Route::get("/Salary/AddOT", function () {
    if (Facades\Session::get("id") != null)
        return view('Registration.AddOverTime');
    else
        return view('Login.LoginPage');
});
Route::get("/Salary/ConfirmOT", function () {
    if (Facades\Session::get("id") != null)
        return view('Registration.ConfirmOT');
    else
        return view('Login.LoginPage');
});
Route::get("/Salary/TotalSalary", function () {
    if (Facades\Session::get("id") != null)
        return view('Registration.TotalSalary');
    else
        return view('Login.LoginPage');
});
Route::get('/Employee/ListEmp', function () {
    if (Facades\Session::get("id") != null)
        return view('Employee.ListEmployee');
    else
        return view('Login.LoginPage');
});
Route::get('/Employee/Detail', function () {
    if (Facades\Session::get("id") != null)
        return view('Employee.InforEmployee');
    else
        return view('Login.LoginPage');
});
Route::get('/getInformation', 'EmployeeController@getInformation');
Route::get('/Salary/Timekeeping', function () {
    if (Facades\Session::get("id") != null)
        return view('Registration.Timekeeping');
    else
        return view('Login.LoginPage');
});

Route::get('/Salary/SalaryNumber', function () {
    if (Facades\Session::get("id") != null)
        return view('Registration.ViewSalary');
    else
        return view('Login.LoginPage');
});
Route::get('/sumSalary','SalaryController@sumSalary');
Route::get('/geDataTimeKeeping', 'SalaryController@geDataTimeKeeping');
Route::get('/updateSalary', 'SalaryController@updateSalary');

//notification
Route::get('/getNotification', 'NotificationController@getNotification');
Route::get('/setChecked', 'NotificationController@setChecked');

//Registration
Route::get('/getRegistration', 'RegistrationController@getRegistration');
Route::get('/addRegistrationDetail', 'RegistrationController@AddOverTime');
Route::get('/editRegistrationDetail', 'RegistrationController@EditOverTime');
Route::get('/deleteRegistration', 'RegistrationController@DeleteOverTime');
Route::get('/PagingByMonthOverTime', 'RegistrationController@PagingByMonthOverTime');
Route::get('/SearchOverTime', 'RegistrationController@SearchOverTime');

//ConfirmOverTime
Route::get('/getAllRegistration', 'ConfirmOverTimeController@getAllRegistration');
Route::get('/RefuseRegistration', 'ConfirmOverTimeController@RefuseRegistration');
Route::get('/SubmitRegistration', 'ConfirmOverTimeController@SubmitRegistration');
Route::get('/SearchConfirm', 'ConfirmOverTimeController@SearchConfirm');
Route::get('/PagingByMonthConfirm', 'ConfirmOverTimeController@PagingByMonthConfirm');

//Employee
Route::get('/getAllEmployee', 'EmployeeController@getAllEmployee');
Route::get('/getAllRole', 'EmployeeController@getAllRole');
Route::get('/Employee/ChangeInformation', 'EmployeeController@changeInformation');
Route::get('/getEmpForUpdate','EmployeeController@getEmpForUpdate');
Route::get('/deleteEmployee','EmployeeController@deleteEmployee');
Route::get('/addEmployee','EmployeeController@addEmployee');
Route::get('/updateEmployee','EmployeeController@updateEmployee');


//Oganization
Route::get('/Oganization/Position', function () {
    if (Facades\Session::get("id") != null)
        return view('Oganization.Oganization');
    else
        return view('Login');
});
Route::get('/getDepartment', 'OganizationController@getDepartment');
Route::get('/getTitle', 'OganizationController@getTitle');
Route::get('/getEmpByDepartment', 'OganizationController@getEmpByDepartment');
Route::get('/getEmpByReady', 'OganizationController@getEmpByReady');
Route::get('/getEmpByTitle', 'OganizationController@getEmpByTitle');
Route::get('/Oganization/dashboard', function () {
    if (Facades\Session::get("id") != null)
        return view('Oganization.Dashbroad');
    else
        return view('Login');
});
Route::get('/getNumberBoy', 'OganizationController@getNumberBoy');
Route::get('/getNumberGirl', 'OganizationController@getNumberGirl');
Route::get('/getAllDepartment', 'OganizationController@getAllDepartment');
Route::get('/getAllTitle', 'OganizationController@getAllTitle');
Route::get('/getTitleById', "OganizationController@getTitleById");

// database
Route::get("db", function () {
    $data = Facades\DB::table('employee')->get();
    var_dump($data);
});


Route::get("database", function () {
    Schema::create('role', function ($table) {
        $table->increments('id');
        $table->string('name', 50);
    });
    echo "done";
});
Route::get("department", function () {
    Schema::create('department', function ($table) {
        $table->increments('id');
        $table->string('name', 50);
    });
    echo "done";
});
Route::get("status", function () {
    Schema::create('status', function ($table) {
        $table->increments('id');
        $table->string('statusname', 50);
    });
    echo "done";
});
Route::get("menu", function () {
    Schema::create('menu', function ($table) {
        $table->increments('id');
        $table->string('name', 50);
        $table->string('url', 100);
        $table->string('menuScreen', 100);
        $table->boolean('deleteflag');
    });
    echo "done";
});
Route::get("menumapping", function () {
    Schema::create('menumapping', function ($table) {
        $table->integer('menuid')->primary('menuid');
        $table->integer('roleid')->primary('roleid');
    });
    echo "done";
});
Route::get("employee", function () {
    Schema::create('employee', function ($table) {
        $table->increments('id');
        $table->string('userEmp', 100);
        $table->string('nameEmp', 50);
        $table->integer('departmentid');
        $table->date("birthday");
        $table->boolean("sex");
        $table->binary("image");
        $table->string("address", 200);
        $table->string("email", 200);
        $table->string("phone", 200);
        $table->boolean('isdelete');
        $table->string('password', 200);
        $table->integer("roleId");
    });
    echo "done";
});

Route::get("post", function () {
    Schema::create('post', function ($table) {
        $table->increments('id');
        $table->string('theme', 200);
        $table->string('content', 1000);
        $table->binary('urlFile');
        $table->integer('empId');
        $table->boolean('isdelete');
    });
    echo "done";
});

Route::get("registrationDetail", function () {
    Schema::create('registrationDetail', function ($table) {
        $table->increments('id');
        $table->date('registrationDate');
        $table->time('timeStart');
        $table->time('timeFinish');
        $table->string('reason', 500);
        $table->string('reasonForCancel', 500);
        $table->integer('statusid');
        $table->boolean('isdelete');
    });
    echo "done";
});

Route::get("timekeeping", function () {
    Schema::create('timekeeping', function ($table) {
        $table->increments('id');
        $table->integer('empid');
        $table->date('timekeepingDate');
        $table->time('timeStartAM');
        $table->time('timeFinishAM');
        $table->time('timeStartPM');
        $table->time('timeFinishPM');
        $table->time('timeStartOT');
        $table->time('timeFinishOT');
    });
    echo "done";
});
