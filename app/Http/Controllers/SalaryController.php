<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
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

    public function updateSalary(Request $request)
    {
        $Time_id = $request->Time_id;
        $Employee_Id = $request->Employee_Id;
        $DateWork = $request->DateWork;
        $timeStartAM = $request->timeStartAM;
        $timeFinishAM = $request->timeFinishAM;
        $timeStartPM = $request->timeStartPM;
        $timeFinishPM = $request->timeFinishPM;
        $timeStartOT = $request->timeStartOT;
        $timeFinishOT = $request->timeFinishOT;
        $checkTime = DB::select("select count(id) from timekeeping where id = $Time_id");
        if ($checkTime != 0) {
            DB::table('timekeeping')->where('id', $Time_id)->update(['empid' => $Employee_Id, 'timekeepingDate' => $DateWork
                , 'timeStartAM' => $timeStartAM, 'timeFinishAM' => $timeFinishAM, 'timeStartPM' => $timeStartPM,
                'timeFinishPM' => $timeFinishPM, 'timeStartOT' => $timeStartOT, 'timeFinishOT' => $timeFinishOT]);
        } else {

        }
    }

    public function sumSalary()
    {
        $id = Session::get('id');
        $result = DB::select("select * from timekeeping where empid = $id");
        $today = getdate();

        $numberDay = 0;
        if ($today["mon"] == 2 and $today["year"] % 4 == 0)
            $numberDay = 29;
        elseif ($today["mon"] == 2)
            $numberDay = 28;
        elseif ($today["mon"] == 11 or $today["mon"] == 9 or $today["mon"] == 6 or $today["mon"] == 4)
            $numberDay = 30;
        else $numberDay = 31;

        $holidays=array("2020-04-30","2020-09-02","2020-01-01","2020-05-01");
        $startDay = $today["year"]."-".$today["mon"]."-01";
        $endDay = $today["year"]."-".$today["mon"]."-".$numberDay;
        $numberDayWork = $this->getWorkingDays($startDay,$endDay,$holidays);
        $numberTimeWorkLT = $numberDayWork * 8;
        $numberTimeWorkTT = 0;
        $numberTimeOT = 0;


        for( $i = 0 ; $i < count($result) ; $i++)
        {
            $b = strtotime($result[$i] -> timekeepingDate);
            $dt2 = date("w", $b);
            $startAM = $result[$i] -> timeStartAM;
            $startPM = $result[$i] -> timeStartPM;
            $startOT = $result[$i] -> timeStartOT;
            $finishAM = $result[$i] -> timeFinishAM;
            $finishPM = $result[$i] -> timeFinishPM;
            $finishOT = $result[$i] -> timeFinishOT;
            if($dt2 == 0 or $dt2 == 6){
                $numberTimeOT += (strtotime($finishAM) - strtotime($startAM) + strtotime($finishPM) - strtotime($startPM) + strtotime($finishOT) - strtotime($startOT)) / 3600;
            }
            else{
                $numberTimeOT += (strtotime($finishOT) - strtotime($startOT)) / 3600;
                $numberTimeWorkTT += ((strtotime($finishAM) - strtotime($startAM)) + (strtotime($finishPM) - strtotime($startPM)) ) / 3600;
            }
        }
        $getSalary = DB::select("SELECT salary FROM employee WHERE id = $id");
        $salaryEmp = $getSalary[0] -> salary;
        $totalSalary = $salaryEmp * (($numberTimeWorkTT + $numberTimeOT * 1.5) / $numberTimeWorkLT);
        $lstSalary = array();
        $lstSalary["mon"] = $today["mon"];
        $lstSalary["numberDayWork"] = $numberDayWork;
        $lstSalary["numberTimeWorkLT"] = $numberTimeWorkLT;
        $lstSalary["numberTimeWorkTT"] = $numberTimeWorkTT;
        $lstSalary["numberTimeOT"] = $numberTimeOT;
        $lstSalary["totalSalary"] = $totalSalary;
        return $lstSalary;
    }

    function getWorkingDays($startDate,$endDate,$holidays){

        $endDate = strtotime($endDate);
        $startDate = strtotime($startDate);

        $days = ($endDate - $startDate) / 86400 + 1;

        $no_full_weeks = floor($days / 7);
        $no_remaining_days = fmod($days, 7);

        $the_first_day_of_week = date("N", $startDate);
        $the_last_day_of_week = date("N", $endDate);

        if ($the_first_day_of_week <= $the_last_day_of_week) {
            if ($the_first_day_of_week <= 6 && 6 <= $the_last_day_of_week) $no_remaining_days--;
            if ($the_first_day_of_week <= 7 && 7 <= $the_last_day_of_week) $no_remaining_days--;
        }
        else {
            if ($the_first_day_of_week == 7) {
                $no_remaining_days--;

                if ($the_last_day_of_week == 6) {
                    $no_remaining_days--;
                }
            }
            else {
                $no_remaining_days -= 2;
            }
        }

        $workingDays = $no_full_weeks * 5;
        if ($no_remaining_days > 0 )
        {
            $workingDays += $no_remaining_days;
        }
        foreach($holidays as $holiday){
            $time_stamp=strtotime($holiday);
            if ($startDate <= $time_stamp && $time_stamp <= $endDate && date("N",$time_stamp) != 6 && date("N",$time_stamp) != 7)
                $workingDays--;
        }

        return $workingDays;
    }
}
