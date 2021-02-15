<?php

namespace App\Http\Livewire\Admin\Job;

use Livewire\Component;
use App\Models\Job;
use App\Models\Employee;

class AdminJobEmployees extends Component
{
    public $job;
    public $new = False;
    public $newEmployee;

    public $listeners = ['refresh' => 'render'];

    public function detachEmployee($id)
    {
        $this->job->employees()->detach($id);

        $this->emit('refresh');
    }

    public function updatedNewEmployee()
    {   
        $this->job->employees()->attach($this->newEmployee);
        $this->reset(['new', 'newEmployee']);

        $this->emit('refresh');
    }

    public function render()
    {
        return view('livewire.admin.job.admin-job-employees', [
            'employees' => Employee::all(),
        ]);
    }
}
