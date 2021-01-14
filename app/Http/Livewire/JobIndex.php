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
            'jobs' => Job::where('status', '=', 0)->get()->sortByDesc('updated_at'),
            ])
            ->extends('layouts.main');
    }
}
