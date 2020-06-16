<?php

namespace App\Http\Controllers;

use App\BuildingClient;
use App\Client;
use Illuminate\Http\Request;

class BuildingClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::find(1);
        //dd($clients->buildings);
        foreach($clients->buildings as $building) {
            echo $building->buildingName;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BuildingClient  $buildingClient
     * @return \Illuminate\Http\Response
     */
    public function show(BuildingClient $buildingClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BuildingClient  $buildingClient
     * @return \Illuminate\Http\Response
     */
    public function edit(BuildingClient $buildingClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BuildingClient  $buildingClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuildingClient $buildingClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BuildingClient  $buildingClient
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuildingClient $buildingClient)
    {
        //
    }
}
