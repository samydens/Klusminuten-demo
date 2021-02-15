<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class Archive extends Component
{
    public function render()
    {
        return view('livewire.archive', [
            'jobs' => Auth::user()->company->jobs->where('status', '>=', 1),
        ])
        ->extends('layouts.main');
    }
}