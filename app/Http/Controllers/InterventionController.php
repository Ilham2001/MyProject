<?php

namespace App\Http\Controllers;

use App\Intervention;
use App\Building;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$interventions = array();
        $interventions = DB::table('interventions')->get();
    
        /*foreach($interventions as $inter) {
            //$id = $inter->id_building;
            var_dump($inter);
        }*/


        
        

        return view('onglets/interventions',compact('interventions'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Intervention  $intervention
     * @return \Illuminate\Http\Response
     */
    public function show(Intervention $intervention)
    {
        $inter = Intervention::find($intervention->id);
        $demand = $inter->demand;
        $building = $inter->building;
        $staffs = $inter->staffs;
        $call_record = $inter->call_record;
       //dd($intervention->call_record);

        return view('onglets.interventionDetail')
            ->with('intervention',$inter)
            ->with('demand',$demand)
            ->with('building',$building)
            ->with('staffs',$staffs);
            //->with('call_record',$call_record);
    }
}
