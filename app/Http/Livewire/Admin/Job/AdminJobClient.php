<?php

namespace App\Http\Livewire\Admin\Job;

use Livewire\Component;
use App\Models\Job;
use App\Models\Client;

class AdminJobClient extends Component
{
    public $job;
    public $allClients;
    public $newClient = False;
    public $newClientId;

    public function mount($job)
    {
        $this->job = $job;
        $this->allClients = Client::all();
    }

    public function submit()
    {
        $this->job->clients()->attach($this->newClientId);

        $this->reset('newClientId');
        $this->reset('newClient');

        $this->refresh();
    }

    public function detachClient($id)
    {
        $this->job->clients()->detach($id);

        $this->refresh();
    }

    public function refresh()
    {
        return $this->job = Job::find($this->job->id);
    }

    public function render()
    {
        return view('livewire.admin.job.admin-job-client');
    }
}
