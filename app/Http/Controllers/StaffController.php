<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StaffController extends Controller
{
    public function index()
    {
        $staffs = DB::table('staffs')->get();
       // dd($staffs);
        $i =$staffs->intervention;
        dd($i);
    }
}
