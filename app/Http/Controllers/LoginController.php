<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use mysql_xdevapi\Table;

class LoginController extends Controller
{

    public function ChangePW(Request $request)
    {
        $currentpw = base64_encode($request -> currentpw);
        $psw = base64_encode($request -> psw);
        $id = Session::get("id");
        $result = DB::select("select * from employee where password = '".$currentpw."' and id = '".$id."'");
        if( $result[0] -> id != null){
            DB::table('employee') -> where('id',$id) -> update(['password' => $psw]);
            return true;
        }
        else
            return false;
    }


    public function setCookie(){
        $reponse = new Response();
        $reponse -> withCookie("hello","hello world",60);
        return $reponse;
    }
    public function getCookie(Request $request)
    {
        return $request->cookie('hello');
    }
    public function Home(Request $request){
        $pw = base64_encode($request -> pw);
        $user = $request -> user;
        $result = DB::select("select * from employee where userEmp = '$user' and password = '$pw'");
        if(count($result) != 0){
            Session::put("id",$result[0] -> id);
            Session::put("departmentId",$result[0] -> departmentid);
            Session::put("email",$result[0] -> email);
            Session::put("nameEmp",$result[0] -> nameEmp);
            Session::put("password",base64_encode($request -> password));
            Session::put("roleId",$result[0] -> roleId);
            Session::put("userEmp",$result[0] -> userEmp);
            return $result;
        }
        else return $result;

    }
}
