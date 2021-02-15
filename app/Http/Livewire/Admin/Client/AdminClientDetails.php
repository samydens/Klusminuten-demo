<?php

namespace App\Http\Livewire\Admin\Client;

use Livewire\Component;
use App\Models\Client;

class AdminClientDetails extends Component
{
    public $client;

    protected $rules = [
        'client.full_name' => 'required',
        'client.adres' => 'required|string',
        'client.zip' => 'nullable|max:10',
        'client.city' => 'required|string',
        'client.phone_number' => 'nullable',
        'client.mail' => 'nullable|email'
    ];

    public function updatedClient()
    {
        $this->validate();
        $this->client->save();
        session()->flash('message', 'Opgeslagen!');
    }

    public function render()
    {
        return view('livewire.admin.client.admin-client-details');
    }
}
