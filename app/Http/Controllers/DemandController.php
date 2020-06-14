<?php

namespace App\Http\Controllers;

use App\Quote;
use App\Demand;
use App\Intervention;
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
        return view('onglets/demands',compact('demands'));
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
        //dd($demand);

        if($demand->type_demand == "Intervention") {
            $intervention = new Intervention;
            $intervention->id_demand = $demand->id;
            $intervention->desiredDate = request('desiredDate');
            $intervention->desiredTime = request('desiredTime');
            $intervention->save();

        }
        
        elseif($demand->type_demand == "Devis") {
            $quote = new Quote;
            $quote->id_demand = $demand->id;
            $quote->date_quote = now()->format("Y-m-d");
            $quote->save();
        }
        else {
            /*$this->validate($request, [
                'clientEmail' => 'required|email',
                'content' => 'required'
            ]);*/
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function edit(Demand $demand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demand $demand)
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
