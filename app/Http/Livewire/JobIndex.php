<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class JobIndex extends Component
{
    public function render()
    {
        return view('livewire.job-index', [
            'jobs' => Job::all()
            ])
            ->extends('klusminuten.layout.app');
    }
}
