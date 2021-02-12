<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Job;

class ShowActiveJob extends Component
{
    public $job;

    public function mount($id)
    {
        $this->job = Job::find($id);
    }

    public function complete()
    {
        $this->job->status = 1;
        $this->job->save();

        session()->flash('message', 'Klus Afgerond!');

        return redirect()->to('/home');
    }

    public function render()
    {
        return view('livewire.dashboard.show-active-job')
            ->extends('layouts.main')
            ->section('content');
    }
}
