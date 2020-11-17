<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ConfirmOverTimeController extends Controller
{
    public function getAllRegistration(Request $request)
    {
        $month = $request->month;
        $year = $request->year;
        $lstRegistration = DB::select("SELECT registrationdetail.id,employee.nameEmp,registrationDate,timeStart,timeFinish,reason,reasonForCancel,statusId
            FROM registrationdetail,employee
            WHERE month(registrationDate) = $month and year(registrationDate) = $year and employee.id = registrationdetail.userId and registrationdetail.isDelete = 0");
        return $lstRegistration;
    }

    public function RefuseRegistration(Request $request)
    {
        $otId = $request->otId;
        $reasonForCancel = $request->reasonForCancel;
        DB::table('registrationDetail')->where('id', $otId)->update(['statusId' => 2, 'reasonForCancel' => $reasonForCancel]);
        return true;
    }

    public function SubmitRegistration(Request $request)
    {
        $arrId = $request->arrId;
        foreach ($arrId as $item) {
            DB::table('registrationDetail')->where('id', $item)->update(['statusId' => 1]);
            $result = DB::select("select * from registrationDetail where id = $item");
            $registrationDate =$result[0] ->registrationDate;
            $timeStart =$result[0] -> timeStart;
            $timeFinish =$result[0] -> timeFinish;
            $id =$result[0] -> userId;
            $checkdate = DB::select("select * from timekeeping where timekeepingDate = $registrationDate and empId = $id");
            if(count($checkdate) == 0){
                DB::table("timekeeping") ->insert(["empId" => $id,"timekeepingDate" => $registrationDate,"timeStartOT" => $timeStart,"timeFinishOT" => $timeFinish,"timeStartAM" => 0,"timeFinishAM" => 0,"timeStartPM" => 0,"timeFinishPM" => 0]);
            }
            else{
                DB::table("timekeeping") -> where("timekeepingDate", $registrationDate) ->where("empId", $id) -> update(["timeStartOT" => $timeStart,"timeFinishOT" => $timeFinish]);
            }
            var_dump($checkdate);
        }
        return true;
    }

    public function SearchConfirm(Request $request)
    {
        $statusId = $request->statusId;
        $month = $request->month;
        $year = $request->year;
        $Id = Session::get("id");
        $lstRegistration = DB::select("select registrationdetail.id,employee.nameEmp,registrationDate,timeStart,timeFinish,reason,reasonForCancel,statusId
            FROM registrationdetail,employee
            where month(registrationDate) = $month and year(registrationDate) = $year and statusid = $statusId and employee.id = registrationdetail.userId and registrationdetail.isDelete = 0");
        return $lstRegistration;
    }

    public function PagingByMonthConfirm(Request $request)
    {
        $temp = $request->temp;
        $month = $request->month;
        $year = $request->year;
        $Id = Session::get("id");
        $lstRegistration = DB::select("select registrationdetail.id,employee.nameEmp,registrationDate,timeStart,timeFinish,reason,reasonForCancel,statusId
            FROM registrationdetail,employee
            where month(registrationDate) = $month and year(registrationDate) = $year and employee.id = registrationdetail.userId and registrationdetail.isDelete = 0");
        return $lstRegistration;
    }
}
