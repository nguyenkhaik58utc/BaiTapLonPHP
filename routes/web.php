<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades;


//Login
Route::get('/', function () {
    return view('Login');
});

Route::get('getFormChange',function (){
   return view('Login.ChangePassword');
});

Route::Post("Home", ['as' => 'Login', 'uses' => 'LoginController@Home']);

//Menu
Route::get("getMenu", "MenuController@getMenu");

// database
Route::get("db",function (){
   $data = Facades\DB::table('employee') -> get();
   var_dump($data);
});

//goi controller
//Route::get("hello",'LoginController@Hello');
//Route::get("Call/{ten}",'LoginController@getTen');
//route::get('setCookie','LoginController@setCookie');
//route::get('getCookie','LoginController@getCookie');
//Route::get("Login","LoginController@Login");

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
