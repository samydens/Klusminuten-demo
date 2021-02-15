<?php

namespace App\Http\Livewire\Admin\Client;

use Livewire\Component;
use App\Models\Client;

class ClientAdmin extends Component
{
    public $query;

    public function render()
    { 
        $query = '%'.$this->query.'%';

        return view('livewire.admin.client.client-admin', [
            'clients' => Client::where('full_name', 'like', $query)->get(),
        ]);
    }
}
