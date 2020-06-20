<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BuildingSearchController extends Controller
{
    function index() {
        return view('testSearch');
    }

    function search(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $buildings = DB::table('buildings')->where('buildingName','LIKE','%'.$request->search."%")->get();

            if($buildings) {
                foreach ($buildings as $key => $building) {
                    $output.='<tr>'. 
                        '<td>' .$building0->buildingName.'</td>'. 
                    '<tr>';
                }
                return Response($output);
            }
        }
    }
    
}
