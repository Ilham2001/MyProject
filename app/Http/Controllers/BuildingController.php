<?php

namespace App\Http\Controllers;

use App\Building;
use App\Client;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::find(1);	
        
    }

    /**
     * Building's demands
     */
    public function show($id)
    {
        //
    }
}
