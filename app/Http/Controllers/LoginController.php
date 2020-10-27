<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use mysql_xdevapi\Table;

class LoginController extends Controller
{

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
        $pw = $request -> password;
        $user = $request -> username;

        $a = DB::table('employee') ->get();
        if($user == "nguyenkhaik58" && $pw == "123456"){
            return view('Home.layout');
        }
        else return view('Login');

    }
}
