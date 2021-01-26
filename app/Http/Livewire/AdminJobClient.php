<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use App\Models\Client;

class AdminJobClient extends Component
{
    public $job;
    public $clients;
    public $allClients;
    public $newClient = False;
    public $newClientId;

    public function mount($jobId)
    {
        $this->job = Job::find($jobId);
        $this->clients = $this->job->clients;
        $this->allClients = Client::all();
    }

    public function submit()
    {
        $this->job->clients()->attach($this->newClientId);

        $this->reset('newClientId');
        $this->reset('newClient');

        $this->refreshClients();
    }

    public function detachClient($id)
    {
        $this->job->clients()->detach($id);
        $this->refreshClients();
    }

    public function refreshClients()
    {
        return $this->clients = Job::find($this->job->id)->clients;
    }

    public function render()
    {
        return view('livewire.admin-job-client');
    }
}
