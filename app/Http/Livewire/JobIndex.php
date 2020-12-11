<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class JobIndex extends Component
{
    public function redirectToArchive()
    {
        return redirect()->to('/archief');
    }

    public function render()
    {
        return view('livewire.job-index', [
            'jobs' => Job::where([['active', '=', 0], ['completed', '=', '0']])->get(),
            ])
            ->extends('klusminuten.layout.app');
    }
}
