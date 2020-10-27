<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function getMenu(){

        $a = DB::table('menu') ->get();
        return $a;
    }
}
