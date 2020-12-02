<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class AddClient extends Component
{
    public $client;

    protected $rules = [
        'client.full_name' => 'required',
        'client.adres' => 'required',
        'client.zip' => 'required',
        'client.city' => 'required',
        'client.phone_number' => 'required',
        'client.mail' => 'required',
    ];

    protected $messages = [
        'required' => 'Dit veld is verplicht' 
    ];

    public function submit() {
        
        $this->validate();

        $client = new Client;
        $client->full_name = $this->client['full_name'];
        $client->adres = $this->client['adres'];
        $client->zip = $this->client['zip'];
        $client->city = $this->client['city'];
        $client->phone_number = $this->client['phone_number'];
        $client->mail = $this->client['mail'];
        $client->save();

        $this->client = '';

        session()->flash('message', 'Opgeslagen.');
    }

    public function render()
    {
        return view('livewire.add-client');
    }
}
