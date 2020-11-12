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

    public function updateSalary(Request $request){
        $Time_id = $request -> Time_id;
        $Employee_Id = $request -> Employee_Id;
        $DateWork = $request -> DateWork;
        $timeStartAM = $request -> timeStartAM;
        $timeFinishAM = $request -> timeFinishAM;
        $timeStartPM = $request -> timeStartPM;
        $timeFinishPM = $request -> timeFinishPM;
        $timeStartOT = $request -> timeStartOT;
        $timeFinishOT = $request -> timeFinishOT;
        $checkTime = DB::select("select count(id) from timekeeping where id = $Time_id");
        if($checkTime != 0){
            DB::table('timekeeping')->where('id', $Time_id)->update(['empid' => $Employee_Id, 'timekeepingDate' => $DateWork
                ,'timeStartAM' => $timeStartAM,'timeFinishAM' => $timeFinishAM,'timeStartPM' => $timeStartPM,
                'timeFinishPM' => $timeFinishPM,'timeStartOT' => $timeStartOT,'timeFinishOT' => $timeFinishOT]);
        }
        else{

        }
    }
}
