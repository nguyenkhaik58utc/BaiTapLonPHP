<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OganizationController extends Controller
{
    public function getDepartment()
    {
        $lstDep = DB::select("SELECT department.id,department.parentid,department.nameDep, title.idTitle,title.nameTitle from departmenttitle,title,department WHERE department.id = departmenttitle.depId and departmenttitle.titleId = title.idTitle");
        return $lstDep;
    }

    public function getNumberBoy(){
        $result = Db::select("SELECT count(sex) as number FROM `employee` WHERE sex = 0");
        return $result;
    }

    public function getNumberGirl(){
        $result = Db::select("SELECT count(sex) as number FROM `employee` WHERE sex = 1");
        return $result;
    }

    public function getTitle()
    {
        $lstMenu = DB::select("select title.id,title.name from title,departmentTitle where title.id = departmentTitle.titleid ");
        return $lstMenu;
    }

    public function getEmpByDepartment(Request $request)
    {
        $depId = $request->depId;
        $parentid = $request->parentid;
        $lstDepartment = null;
        if ($parentid == 0)
            $lstDepartment = DB::select("select * from employee ");
        else
            $lstDepartment = DB::select("select * from employee where departmentid = $depId");
        return $lstDepartment;

    }

    public function getEmpByReady()
    {
        $lstDepartment = DB::select("select * from employee ");
        return $lstDepartment;
    }

    public function getEmpByTitle(Request $request)
    {
        $titleId = $request->titleId;
            $lstDepartment = DB::select("select * from employee where titleid = $titleId");
        return $lstDepartment;

    }
}
