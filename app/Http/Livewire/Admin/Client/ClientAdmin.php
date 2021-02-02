<?php

namespace App\Http\Livewire\Admin\Client;

use Livewire\Component;
use App\Models\Client;

class ClientAdmin extends Component
{
    public $query;
    public $clients;

    public function deleteClient($id)
    {
        $client = Client::find($id);
        $jobs = $client->jobs;
        
        if ($jobs) {
            foreach ($jobs as $job) {
                $client->jobs()->detach($job->id);
            }
        }
    }

    public function render()
    {
        $query = '%'.$this->query.'%';
        $this->clients = Client::where('full_name', 'like', $query)->get();
        return view('livewire.admin.client.client-admin');
    }
}
