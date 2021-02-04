<?php

namespace App\Http\Livewire\Admin\Client;

use Livewire\Component;

class ShowClientAdmin extends Component
{
    public $clientId;

    public function mount($id)
    {
        $this->clientId = $id;
    }

    public function render()
    {
        return view('livewire.admin.client.show-client-admin')
        ->extends('layouts.show')
        ->section('content');
    }
}