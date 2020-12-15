<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class Archive extends Component
{
    public function render()
    {
        return view('livewire.archive', [
            'jobs' => Job::where('status', '>', 1)->get(),
        ])
        ->extends('klusminuten.layout.app');
    }
}