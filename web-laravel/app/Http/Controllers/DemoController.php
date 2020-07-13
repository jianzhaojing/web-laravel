<?php

namespace App\Http\Controllers;

use App\Modues\Demo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function index() {
        return "你好世界";
    }

    public function getList(){
        $list = DB::select("select * from t_technique_class where status=1");

        return $list;
    }

    public function getName(){
        $column = DB::table('t_technique_class')->where(['status' => 1])->value('name');

        return $column;
    }

    public function get(){
        $list = Demo::get();
        dump($list);
        return $list;
    }
}
