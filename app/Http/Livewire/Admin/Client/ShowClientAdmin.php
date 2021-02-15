<?php

namespace App\Http\Livewire\Admin\Client;

use Livewire\Component;
use App\Models\Client;

class ShowClientAdmin extends Component
{
    public $client;

    public function mount($id)
    {
        $this->client = Client::find($id);
    }

    public function render()
    {
        return view('livewire.admin.client.show-client-admin')
        ->extends('layouts.show')
        ->section('content');
    }
}
