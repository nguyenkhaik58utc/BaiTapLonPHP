<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    public function getMenu(){
        $roleId = Session::get("roleId");
        $lstMenu = DB::select("select * from menu,menumapping where menu.id = menumapping.menuid and menumapping.roleid = '".$roleId."'");
        return $lstMenu;
    }
}
