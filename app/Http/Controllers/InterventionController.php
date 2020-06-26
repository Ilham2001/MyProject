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
    
        foreach($interventions as $inter) {
            return $inter->building->adress;
        }


        $result = array();
        foreach ($interventions as $intervention) {
            $data = [
                'intervention' => $intervention,
                'adress' => $intervention->building->adress
            ];
            array_push($result,$data);
        }
        
        dd($result);
        

        //return view('onglets/interventions',compact('interventions'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Intervention  $intervention
     * @return \Illuminate\Http\Response
     */
    public function show(Intervention $intervention)
    {
        $intervention = Intervention::find($intervention->id);
        $demand = $intervention->demand;
        $building = $intervention->building;
        $staffs = $intervention->staffs;
        $call_record = $intervention->call_record;

        return view('onglets.interventionDetail')
            ->with('intervention',$intervention)
            ->with('demand',$demand)
            ->with('building',$building)
            ->with('staffs',$staffs)
            ->with('call_record',$call_record);
    }
}
