<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class JobIndex extends Component
{
    public function render()
    {
        return view('livewire.job-index', [
            'jobs' => Job::where('company_id', '=', 0)->get()->sortBy('created_at'),
            ])
            ->extends('layouts.main');
    }
}
