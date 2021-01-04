<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use App\Models\Minute;
use App\Models\Material;

class Editjob extends Component
{
    public $status, $edit, $material, $minutes,  $title, $job;

    // List of all statuses
    public $statuses = [
        'Nog niet begonnen',
        'In uitvoering',
        'Afgerond',
        'Factuur verzonden',
        'Factuur betaald',
    ];

    public function mount($job)
    {
        $this->status = $job->status;
        $this->material = $job->agr_material;
        $this->minutes = $job->agr_minutes;
        $this->title = $job->title;
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

    public function deleteJob()
    {

    }

    public function render()
    {
        return view('livewire.admin.editjob')
            ->extends('layouts.admin')
            ->section('content');
    }
}
