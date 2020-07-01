<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Building;
use App\Client;
use Auth;
class LiveSearch extends Component
{
    public $searchTerm;
    public $buildings;
    public function render()
    {
        $user=Auth::user();
        $client = $user->clients;
        $client_id = $client->id;
        //dd($client_id);
        //dd($client->id);
        //dd($client->buildings);
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->buildings = Building::where('buildingName','like',$searchTerm)->get();
        return view('livewire.live-search');
    }
}
