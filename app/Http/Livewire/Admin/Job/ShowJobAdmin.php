<?php

namespace App\Http\Livewire\Admin\Job;

use Livewire\Component;
use App\models\Job;

class ShowJobAdmin extends Component
{
    public $job;

    public function mount($id)
    {
        $this->job = Job::find($id);
    }

    public function render()
    {
        return view('livewire.admin.job.show-job-admin')
        ->extends('layouts.show')
        ->section('content');
    }
}
