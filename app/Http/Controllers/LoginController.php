<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use mysql_xdevapi\Table;

class LoginController extends Controller
{
    public function Hello(){
        echo "hello my fiend";
    }
    public function getTen($ten){
        echo "hello my fiend: ".$ten;
       return redirect() -> route('myroute');
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
    public function Login(Request $request){
        $pw = $request -> password;
        $user = $request -> username;

        $a = DB::table('employee') ->get();
        var_dump($a);
        if($user == "nguyenkhaik58" && $pw == "123456"){
            return view('Menu');
        }
        else return view('Login');

    }
}
