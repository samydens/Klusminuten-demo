<?php

namespace App\Http\Livewire\Admin\Employee;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Job;

class AdminEmployeeJobs extends Component
{
    public $employee;
    public $newJob = False;
    public $newJobId;

    public $listeners = ['refresh' => 'render'];

    public function updatedNewJobId()
    {
        $this->employee->jobs()->attach($this->newJobId);

        session()->flash('message', 'Opgeslagen!');
        $this->reset(['newJob', 'newJobId']);
        $this->emit('refresh');
    }
    
    public function detachJob($id)
    {
        $this->employee->jobs()->detach($id);
        
        $this->emit('refresh');
    }

    public function render()
    {
        return view('livewire.admin.employee.admin-employee-jobs', [
            'jobs' => Job::all(),
        ]);
    }
}
