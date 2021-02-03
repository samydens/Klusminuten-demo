<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Job;

class Dashboard extends Component
{
    public $jobs;

    public function mount()
    {
        $this->jobs = Job::where('status', 1)->select('id')->get();
    }

    public function render()
    {
        return view('livewire.dashboard.dashboard')
            ->extends('layouts.main')
            ->section('content');
    }
}
