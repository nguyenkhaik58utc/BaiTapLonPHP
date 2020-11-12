<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    public function getInformation(){
        $id = Session::get("id");
        $result = DB::select("select * from employee where id = $id");
        return $result;
    }
    public function getAllEmployee(){
        $id = Session::get("id");
        $result = DB::select("select employee.id,employee.nameEmp,department.nameDep from employee,department where employee.departmentid = department.id and employee.id != $id");
        return $result;
    }

    public function getAllRole(){
        $result = DB::select("select * from role");
        return $result;
    }
}
