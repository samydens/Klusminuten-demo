<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use App\Models\Minute;
use App\Models\Material;

class Editjob extends Component
{
    public $job;
    public $title;
    public $minutes;
    public $material;
    public $status;
    public $edit;

    public function mount()
    {
        // $this->title = $job->title;
        // $this->minutes = $job->agr_minutes;
        // $this->material = $job->agr_material;
        // $this->status = $job->status;   
    }

    public function totalMinutes()
    {
        // Get total minutes from database
        $minutes = Minute::where([['job_id', '=', $this->job->id], ['stopped', '=', 1]])->select('total')->get();
        return round($minutes->sum('total') / 60);
    }

    public function totalMaterial()
    {
        // Get total material costs from database
        $material = Material::where('job_id', '=', $this->job->id)->select('amount')->get();
        return number_format($material->sum('amount'), 2, ',', '.');
    }

    public function updated($job)
    {
        $this->job->save();
    }

    // public function updated($minutes)
    // {
    //     $this->job->agr_minutes = $this->minutes;
    //     $this->job->save();
    // }

    // public function updated($material)
    // {
    //     $this->job->agr_material = $this->material;
    //     $this->job->save();
    // }

    // public function updated($status)
    // {
    //     $this->job->status = $this->status;
    //     $this->job->save();
    // }

    public function render()
    {
        return view('livewire.admin.editjob')
            ->extends('layouts.admin')
            ->section('content');
    }
}
