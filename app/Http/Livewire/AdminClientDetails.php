<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class AdminClientDetails extends Component
{
    public $clientRecord;
    public $client = [];
    public $showSubmit = False;

    public function mount($clientId)
    {
        $this->clientRecord = Client::find($clientId);
        
        $client = $this->clientRecord;

        $this->client['full_name'] = $client->full_name;
        $this->client['adres'] = $client->adres;
        $this->client['zip'] = $client->zip;
        $this->client['city'] = $client->city;
        $this->client['phone_number'] = $client->phone_number;
        $this->client['mail'] = $client->mail;
    }

    public function submit()
    {
        $this->clientRecord->full_name = $this->client['full_name'];
        $this->clientRecord->adres = $this->client['adres'];
        $this->clientRecord->zip = $this->client['zip'];
        $this->clientRecord->city = $this->client['city'];
        $this->clientRecord->phone_number = $this->client['phone_number'];
        $this->clientRecord->mail = $this->client['mail'];

        $this->clientRecord->save();

        $this->reset('showSubmit');

        session()->flash('message', 'wijzigingen opgeslagen');
    }

    public function updatedClient()
    {
        $this->showSubmit = True;
    }

    public function render()
    {
        return view('livewire.admin-client-details');
    }
}
