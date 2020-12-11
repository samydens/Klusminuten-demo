<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class Archive extends Component
{
    public function render()
    {
        return view('livewire.archive', [
            'jobs' => Job::where([['active', '=', 0], ['completed', '=', 1]])->get(),
        ])
        ->extends('klusminuten.layout.app');
    }
}
