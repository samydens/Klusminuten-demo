<?php

namespace App\Http\Livewire\Admin\Job;

use Livewire\Component;
use App\Models\Job;
use Illuminate\Support\Facades\File;
use App\Models\Minute;
use App\Models\Material;

class AdminJobDelete extends Component
{
    public $job;
    public $confirm = False;

    public function mount($jobId)
    {
        $this->job = Job::find($jobId);
    }

    public function submit()
    {
        // Detach employees.
        foreach ($this->job->employees as $employee) {
            $this->job->employees()->detach($employee->id);
        }

        // Detach clients.
        foreach ($this->job->clients as $client) {
            $this->job->clients()->detach($client->id);
        }

        // Delete photo;
        
        if ($this->job->photo != 'photos/bathroom.jpg') {
            $photo = public_path($this->job->photo);
            File::delete($photo);
        }

        foreach ($this->job->minutes as $record) {
            $record->delete();
        }

        foreach ($this->job->materials as $record) {
            $record->delete();
        }


        
        $this->job->delete();

        session()->flash('message', 'Klus verwijderd!');
        
        return redirect()->to('/admin?slide=0');
    }

    public function render()
    {
        return view('livewire.admin.job.admin-job-delete');
    }
}
