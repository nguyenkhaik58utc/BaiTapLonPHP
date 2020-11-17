<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function getPost(){
        $id = Session::get("id");
        $result = DB::select("SELECT * from post,postemp WHERE post.id = postemp.postId and postemp.empId = $id");
        return $result;
    }
}
