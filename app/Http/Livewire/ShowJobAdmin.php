<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\Job;

class ShowJobAdmin extends Component
{
    public $jobId;

    public function mount($id)
    {
        // Assign public $jobId to passed $id.
        $this->jobId = $id;
    }

    public function render()
    {
        return view('livewire.show-job-admin')
        ->extends('layouts.show')
        ->section('content');
    }
}
