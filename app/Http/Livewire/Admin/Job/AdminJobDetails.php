<?php

namespace App\Http\Livewire\Admin\Job;

use Livewire\Component;
use App\Models\Job;

class AdminJobDetails extends Component
{
    public $jobRecord; // from db
    public $job = []; // input model array
    public $showSubmit = False; // boolean

    // Messages for validation.
    protected $messages = [
        'required' => 'Dit veld is verplicht',
        'job.title.max' => 'Titel is te lang',
    ];

    public function mount($jobId)
    {
        // Find DB record with passed $jobId.
        $this->jobRecord = Job::find($jobId);

        $job = $this->jobRecord;

        // fill job array with data from DB.
        $this->job['id'] = $job->id;
        $this->job['title'] = $job->title;
        $this->job['desc'] = $job->desc;
        $this->job['agr_minutes'] = $job->agr_minutes;
        $this->job['agr_material'] = $job->agr_material;
    }

    public function submit()
    {
        // Validate user input.
        $this->validate([
            'job.title' => 'required|max:255',
            'job.desc' => 'required',
            'job.agr_minutes' => 'required|max:9999|integer',
            'job.agr_material' => 'required|max:999999.99'
        ]);

        // Assign job array to DB collection.
        $this->jobRecord->title = $this->job['title'];
        $this->jobRecord->desc = $this->job['desc'];
        $this->jobRecord->agr_minutes = $this->job['agr_minutes'];
        $this->jobRecord->agr_material = $this->job['agr_material'];
        
        // Save collection to DB.
        $this->jobRecord->save();

        // Reset showSubmit boolean to default value.
        $this->reset('showSubmit');

        // flash succes message.
        session()->flash('message', 'wijzigingen opgeslagen');
    }

    public function updatedJob()
    {
        // When user changes something then show submit button so that user can save changes.
        $this->showSubmit = True;
    }

    public function render()
    {
        return view('livewire.admin.job.admin-job-details');
    }
}
