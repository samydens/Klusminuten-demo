<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class ClientAdmin extends Component
{
    public $query;
    public $clients;

    public function render()
    {
        $query = '%'.$this->query.'%';
        $this->clients = Client::where('full_name', 'like', $query)->get();
        return view('livewire.client-admin');
    }
}
