<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class test extends Controller
{
    // public function index($user)
    // {
    //     echo $user;
    //     echo "<br>";
    //     echo "from controller";
    // }

    public function index()
    {
        // $sql=DB::select('SELECT COUNT(*) as count1 ,`batch_no` as batch,`language` FROM `studentreg` GROUP by `batch_no`,`language` ');
        // dd($sql);
        $sql=DB::select('SELECT COUNT(*) as count1 ,`batch_no` as batch,`language` FROM `studentreg` GROUP by `batch_no`,`language` ');
    }
}
