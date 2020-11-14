<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    public function getInformation()
    {
        $id = Session::get("id");
        $result = DB::select("SELECT employee.id,employee.userEmp,employee.email,employee.image,employee.nameEmp,employee.birthday,employee.sex,employee.address,employee.phone,department.nameDep, title.nameTitle
FROM employee,department,title
WHERE employee.departmentid = department.id and employee.titleId = title.idTitle and employee.id = $id");
        return $result;
    }

    public function getAllEmployee()
    {
        $id = Session::get("id");
        $result = DB::select("select employee.id,employee.nameEmp,department.nameDep from employee,department where employee.departmentid = department.id and employee.id != $id");
        return $result;
    }

    public function getAllRole()
    {
        $result = DB::select("select * from role");
        return $result;
    }
    public function changeInformation(Request $request){
        $id = Session::get('id');
        $employeeName = $request -> employeeName;
        $userEmp = $request -> userEmp;
        $emailEmp = $request -> emailAddress;
        $dateOfBirth = $request -> dateOfBirth;
        $sex = $request -> sex;
        $addressEmp = $request -> addressEmp;
        $phoneNumber = $request -> phoneNumber;
        DB::table('employee')->where('id', $id)->update(['userEmp' => $userEmp, 'nameEmp' => $employeeName, 'email' => $emailEmp, 'birthday' => $dateOfBirth, 'sex' => $sex, 'address' => $addressEmp, 'phone' => $phoneNumber]);
        return true;
    }
}
