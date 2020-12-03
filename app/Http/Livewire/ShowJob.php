<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class ShowJob extends Component
{
    public $job;

    public function mount($id) {
        $this->job = Job::find($id); 
    }

    public function render()
    {
        return view('livewire.show-job')
        ->extends('klusminuten.layout.app');
    }
}
