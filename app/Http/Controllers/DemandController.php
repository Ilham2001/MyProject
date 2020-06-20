<?php

namespace App\Http\Controllers;

use App\Quote;
use App\Demand;
use App\Intervention;
use App\User;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class DemandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demands = DB::table('demands')->get();
        
        $user = User::find(1);

        $client_id = $user->clients->id;

        $clients = Client::find($client_id);

        /*foreach($clients->buildings as $building) {
            echo $building->buildingName;
        }*/
        return view('onglets/demands')->with('demands',$demands)->with('clients',$clients);
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
        $demand = new Demand;
        $demand->date_demand = now()->format("Y-m-d");
        $demand->type_demand = request('type_choice');
        $demand->content_demand = request('content');
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
            $this->validate($request, [
                'clientEmail' => 'required|email',
                'content' => 'required'
            ]);
           $data = "lilham";
            Mail::to('ilham.lazar.01@gmail.com')->send(new SendMail($data));
            return 'Email sent';
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
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demand $demand)
    {
        //
    }
}
