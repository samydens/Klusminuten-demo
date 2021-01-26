<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use App\Models\Job;

class AdminClientJobs extends Component
{
    public $jobs;

    public function mount($clientId)
    {
        $this->jobs = Client::find($clientId)->jobs;
    }

    public function render()
    {
        return view('livewire.admin-client-jobs');
    }
}
