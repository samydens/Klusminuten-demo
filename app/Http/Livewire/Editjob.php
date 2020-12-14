<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class Editjob extends Component
{
    public $jobId;
    public $job;
    
    // Form
    public $title;
    public $agr_material;
    public $agr_minutes;
    public $status;
    
    // Possible statuses for a job
    public $statuses = [
        'Nog niet begonnen',
        'In uitvoering',
        'Afgerond',
        'Factuur verzonden',
        'Factuur betaald',
    ];


    public function mount($id)
    {
        $this->jobId = $id;

        $job = Job::find($this->jobId);
        $this->job = $job;
        $this->title = $job->title;
        $this->agr_material = $job->agr_material;
        $this->agr_minutes = $job->agr_minutes;
        $this->status = $job->status;
    }

    public function save()
    {
        $this->job->title = $this->job['title'];
        $this->job->agr_materials = $this->job['agr_material'];
        $this->job->agr_minutes = $this->job['agr_minutes'];
        $this->job->status = $this->job['status'];
        $this->job->save();
    }

    public function render()
    {
        return view('livewire.editjob')
            ->extends('klusminuten.layout.admin')
            ->section('content');
    }
}
