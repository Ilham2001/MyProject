<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Quote;
use App\Demand;
use App\Client;
use App\Intervention;
use App\Mail\DemandMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;


class DemandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user=Auth::user();
        //dd($user->clients);
        $demands = DB::table('demands')->get();

        $client_id = $user->clients->id;

        $clients = Client::find($client_id);
        
        return view('onglets/demands')
            ->with('demands',$demands)
            ->with('clients',$clients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $demand = new Demand;
        $demand->date_demand = now()->format("Y-m-d");
        $demand->type_demand = request('type_choice');
        $demand->content_demand = request('content');
        $demand->id_building = request('buildingRef');
        $demand->save();        

        if($demand->type_demand == "Intervention") {
            $intervention = new Intervention;
            $intervention->id_demand = $demand->id;
            $intervention->date_intervention = now()->format("Y-m-d");
            $intervention->reason = request('content');
            $intervention->status_intervention = "Prévue";
            $intervention->id_building = request('buildingRef'); 
            $intervention->desiredDate = request('desiredDate');
            $intervention->desiredTime = request('desiredTime');
            $intervention->location_intervention = request('adress_building');
            $intervention->save();
        }
        
        elseif($demand->type_demand == "Devis") {
            $quote = new Quote;
            $quote->id_demand = $demand->id;
            $quote->id_building = request('buildingRef');
            $quote->title_quote = request('title_quote');
            $quote->location_quote = request('adress_building');
            $quote->date_quote = now()->format("Y-m-d");
            $quote->save();
        }
        else {
            //SEND MAIL
            $user=Auth::user();
            $client = $user->clients;
            $client_name = $client->clientName;
            $client_email = $client->clientEmail;
            $demand_content = request('content');
            Mail::to('immobilis@gmail.com')->send(new demandMail($client_name,$client_email,$demand_content));
	        //return new demandMail();
       
        }               
        return redirect()->back()->withSuccess('Votre demande a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function show(Demand $demand)
    {
        $demande = Demand::find($demand->id);
        return view('onglets.demandDetail',compact('demande'));
    }
}
