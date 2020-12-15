<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class ShowJob extends Component
{
    public $job;

    public function mount($id) 
    {
        $this->job = Job::find($id); 
    }

    public function setActive($id) 
    {
        $activeJob = Job::find($id);
        $activeJob->status = 1; // Set status to in progress
        $activeJob->save();
        
        session()->flash('message', 'Uw klus is gestart!');
        return redirect()->to('/home');
    }

    public function render()
    {
        return view('livewire.show-job')
        ->extends('klusminuten.layout.app');
    }
}
