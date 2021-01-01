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
WHERE employee.departmentid = department.id and isdelete = 0 and employee.titleId = title.idTitle and employee.id = $id");
        return $result;
    }

    public function getAllEmployee()
    {
        $id = Session::get("id");
        $result = DB::select("select employee.id,employee.nameEmp,department.nameDep from employee,department where employee.departmentid = department.id and isdelete = 0 and employee.id != $id");
        return $result;
    }

    public function getAllRole()
    {
        $result = DB::select("select * from role");
        return $result;
    }

    public function changeInformation(Request $request)
    {
        $id = Session::get('id');
        $employeeName = $request->employeeName;
        $userEmp = $request->userEmp;
        $emailEmp = $request->emailAddress;
        $dateOfBirth = $request->dateOfBirth;
        $sex = $request->sex;
        $addressEmp = $request->addressEmp;
        $phoneNumber = $request->phoneNumber;
        DB::table('employee')->where('id', $id)->update(['userEmp' => $userEmp, 'nameEmp' => $employeeName, 'email' => $emailEmp, 'birthday' => $dateOfBirth, 'sex' => $sex, 'address' => $addressEmp, 'phone' => $phoneNumber]);
        return true;
    }

    public function getEmpForUpdate(Request $request)
    {
        $id = $request->id;
        $result = DB::select("SELECT employee.id,employee.userEmp,employee.email,role.name,employee.nameEmp,employee.birthday,employee.sex,employee.address,employee.phone,department.nameDep, title.nameTitle
FROM employee,department,title,role
WHERE employee.departmentid = department.id and isdelete = 0 and employee.titleId = title.idTitle and employee.roleId = role.id and employee.id = $id");
        return $result;
    }

    public function deleteEmployee(Request $request)
    {
        $id = $request->id;
        DB::table('employee')->where('id', $id)->update(['isdelete' => 1]);
        $result = DB::select("select isdelete from employee where id = $id and isdelete = 1");
        if (count($result))
            return true;
        else return false;
    }

    public function addEmployee(Request $request)
    {
        $employeeName = $request->employeeName;
        $userEmp = $request->userEmp;
        $department = $request->department;
        $title = $request->title;
        $dateOfBirth = $request->dateOfBirth;
        $sex = $request->sex;
        $addressEmp = $request->addressEmp;
        $emailAddress = $request->emailAddress;
        $phoneNumber = $request->phoneNumber;
        $optionRoles = $request->optionRoles;
        $pw = base64_encode("123456789Aabc");
        DB::table('employee')->insert(['nameEmp' => $employeeName, 'userEmp' => $userEmp, 'departmentId' => $department, 'titleid' => $title, 'birthday' => $dateOfBirth, 'isdelete' => 0,
            'sex' => $sex, 'email' => $emailAddress, 'address' => $addressEmp,'image' => 'https://i0.wp.com/s1.uphinh.org/2020/12/31/132434783_149818056926076_1029854255537768696_n.jpg', 'phone' => $phoneNumber, 'roleid' => $optionRoles, 'password' => $pw]);
        return true;
    }

    public function updateEmployee(Request $request)
    {
        $id = $request->id;
        $employeeName = $request->employeeName;
        $userEmp = $request->userEmp;
        $department = $request->department;
        $title = $request->title;
        $dateOfBirth = $request->dateOfBirth;
        $sex = $request->sex;
        $addressEmp = $request->addressEmp;
        $emailAddress = $request->emailAddress;
        $phoneNumber = $request->phoneNumber;
        $optionRoles = $request->optionRoles;
        $pw = base64_encode("123456789Aabc");
        DB::table('employee')->where('id', $id)->update(['nameEmp' => $employeeName, 'userEmp' => $userEmp, 'departmentId' => $department, 'titleid' => $title, 'birthday' => $dateOfBirth, 'isdelete' => 0,
            'sex' => $sex, 'email' => $emailAddress, 'address' => $addressEmp,'image' => 'https://i0.wp.com/s1.uphinh.org/2020/12/31/132434783_149818056926076_1029854255537768696_n.jpg', 'phone' => $phoneNumber, 'roleid' => $optionRoles, 'password' => $pw]);
        return true;
    }
}
