<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class NotificationController extends Controller
{
    public function getNotification(){
        $id = Session::get('id');
        $result = DB::select("select * from notification where idUser != $id order by id DESC");
        return $result;
    }

    public function setChecked(Request $request){
        $id = $request -> id;
        DB::table('notification')->where('id', $id)->update(['isChecked' => 1]);
        return true;
    }
}
