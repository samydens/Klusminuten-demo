<?php

namespace App\Http\Livewire\Admin\Job;

use Livewire\Component;
use App\Models\Job;
use App\Models\Client;

class AdminJobClient extends Component
{
    public $job;
    public $newClient = False;
    public $newClientId;

    public $listeners = ['refresh' => 'render'];

    public function updatedNewClientId()
    {
        $this->job->clients()->attach($this->newClientId);

        $this->reset(['newClientId', 'newClient']);
        $this->emit('refresh');
    }

    public function detachClient($id)
    {
        $this->job->clients()->detach($id);
        $this->emit('refresh');
    }

    public function render()
    {
        return view('livewire.admin.job.admin-job-client', [
            'clients' => Client::all(),
        ]);
    }
}
