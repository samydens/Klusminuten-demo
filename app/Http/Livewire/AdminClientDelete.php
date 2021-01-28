<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class AdminClientDelete extends Component
{
    public $client;
    public $confirm = False;

    public function mount($clientId)
    {
        $this->client = Client::find($clientId);
    }

    public function submit()
    {
        // Detach jobs
        foreach ($this->client->jobs as $job) {
            $this->client->jobs()->detach($job->id);
        }

        $this->client->delete();

        session()->flash('message', 'Klant verwijderd!');

        return redirect()->to('/admin?slide=2');
    }

    public function render()
    {
        return view('livewire.admin-client-delete');
    }
}
