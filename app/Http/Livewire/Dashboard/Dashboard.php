<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.dashboard', [
            'jobs' => Auth::user()->company->jobs->where('status', 0),
        ])
            ->extends('layouts.main')
            ->section('content');
    }
}
