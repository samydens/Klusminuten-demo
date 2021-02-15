<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class ShowJob extends Component
{
    public $job;

    public function mount($id) 
    {
        $this->job = Job::find($id); 
    }

    public function setActive() 
    {
        // Set company_id of job to company of user.
        $this->job->company_id = Auth::user()->company->id;
        $this->job->save();
        
        session()->flash('message', 'klus is aangenomen');
        
        return redirect()->to('/home');
    }

    public function render()
    {
        return view('livewire.show-job')
        ->extends('layouts.main');
    }
}
