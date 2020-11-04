<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SalaryController extends Controller
{
    public function geDataTimeKeeping()
    {
        $month = date("m");
        $id = Session::get('id');
        $result = DB::select("select * from timekeeping where month (timekeepingDate) = $month and empid = $id");
        return $result;
    }
}
