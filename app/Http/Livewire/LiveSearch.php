<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Building;
use App\Client;
use Auth;
use Illuminate\Support\Facades\DB;

class LiveSearch extends Component
{
    public $searchTerm;
    public $buildings;
    public function render()
    {
        $user=Auth::user();
        $client = $user->clients;
        //dd($client);
        $client_id = $client->id;
    
        $searchTerm = '%' . $this->searchTerm . '%';

        $this->buildings = Building::select('buildingName')
            ->where('buildingName','like',$searchTerm)
            ->join('building_client','buildings.id','=','building_client.building_id')
            ->join('clients','building_client.client_id','=','clients.id')
            ->get();

        return view('livewire.live-search');
    }
}
