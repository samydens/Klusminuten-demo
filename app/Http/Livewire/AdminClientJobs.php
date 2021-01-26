<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use App\Models\Job;

class AdminClientJobs extends Component
{
    public $jobs;
    public $client;
    public $allJobs;
    public $newJob = False;
    public $newJobId;

    public function mount($clientId)
    {
        $client = Client::find($clientId);
        $this->client = $client;
        
        $this->jobs = $client->jobs;
        $this->allJobs = Job::all();
    }

    public function detachJob($id)
    {
        $this->client->jobs()->detach($id);

        $this->refreshJobs();
    }

    public function submit()
    {
        $this->client->jobs()->attach($this->newJobId);

        $this->reset('newJob');
        $this->reset('newJobId');

        $this->refreshJobs();
    }

    public function refreshJobs()
    {
        $this->jobs = Client::find($this->client->id)->jobs;
    }

    public function render()
    {
        return view('livewire.admin-client-jobs');
    }
}
