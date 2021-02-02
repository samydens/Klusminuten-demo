<?php

namespace App\Http\Livewire\Admin\Job;

use Livewire\Component;
use App\models\Job;

class ShowJobAdmin extends Component
{
    public $jobId;

    public function mount($id)
    {
        $this->jobId = $id;
    }

    public function render()
    {
        return view('livewire.admin.job.show-job-admin')
        ->extends('layouts.show')
        ->section('content');
    }
}
