<?php

namespace App\Http\Livewire\Admin\Client;

use Livewire\Component;
use App\Models\Client;
use App\Models\Job;

class AdminClientJobs extends Component
{
    public $client;
    public $newJob = False;
    public $newJobId;

    public $listeners = ['refresh' => 'render'];

    public function updatedNewJobId()
    {
        $this->client->jobs()->attach($this->newJobId);

        $this->reset(['newJob', 'newJobId']);

        $this->emit('refresh');
    }

    public function detachJob($id)
    {
        $this->client->jobs()->detach($id);

        $this->emit('refresh');
    }

    public function render()
    {
        return view('livewire.admin.client.admin-client-jobs', [
            'jobs' => Job::all(),
        ]);
    }
}
