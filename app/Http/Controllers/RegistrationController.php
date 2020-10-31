<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller
{
    public function getRegistration(Request $request)
    {
        $month = $request->month;
        $year = $request->year;
        $Id = Session::get("id");
        $lstRegistration = DB::select("select * from registrationdetail where month(registrationDate) = $month and year(registrationDate) = $year and userId = $Id and isDelete = 0");
        return $lstRegistration;
    }

    public function AddOverTime(Request $request)
    {
        $date = $request->NgayDangKy;
        $timeStart = $request->TGBatDau;
        $timeFinish = $request->TGKetThuc;
        $reason = $request->LyDo;
        $id = Session::get('id');
        DB::table('registrationDetail')->insert(['registrationDate' => $date, 'timeStart' => $timeStart, 'timeFinish' => $timeFinish, 'reason' => $reason, 'userId' => $id, 'reasonForCancel' => 'null', 'statusId' => 3, 'isDelete' => 0]);
        $result = DB::select("select * from registrationdetail where registrationDate = $date and timeStart = $timeStart and timeFinish = $timeFinish and userId = $id and isDelete = 0");
        if ($result != null)
            return true;
        else
            return false;
    }

    public function EditOverTime(Request $request)
    {
        $OtId = $request->OtId;
        $date = $request->NgayDangKy;
        $timeStart = $request->TGBatDau;
        $timeFinish = $request->TGKetThuc;
        $reason = $request->LyDo;
        DB::table('registrationDetail')->where('id', $OtId)->update(['registrationDate' => $date, 'timeStart' => $timeStart, 'timeFinish' => $timeFinish, 'reason' => $reason]);

        return true;
    }

    public function DeleteOverTime(Request $request)
    {
        $otId = $request->otId;
        $reasonForCancel = $request->LyDoHuy;
        DB::table('registrationDetail')->where('id', $otId)->update(['reasonForCancel' => $reasonForCancel, 'isDelete' => 1]);

        return true;
    }

    public function PagingByMonthOverTime(Request $request)
    {
        $temp = $request->temp;
        $month = $request->month;
        $year = $request->year;
        $Id = Session::get("id");
        $lstRegistration = DB::select("select * from registrationdetail where month(registrationDate) = $month and year(registrationDate) = $year and userId = $Id and isDelete = 0");
        return $lstRegistration;
    }

    public function SearchOverTime(Request $request)
    {
        $statusId = $request->statusId;
        $month = $request->month;
        $year = $request->year;
        $Id = Session::get("id");
        $lstRegistration = DB::select("select * from registrationdetail where month(registrationDate) = $month and year(registrationDate) = $year and userId = $Id and isDelete = 0 and statusid = $statusId");
        return $lstRegistration;
    }

}
