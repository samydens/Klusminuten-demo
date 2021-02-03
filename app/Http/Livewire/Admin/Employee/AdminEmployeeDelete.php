<?php

namespace App\Http\Livewire\Admin\Employee;

use Livewire\Component;
use App\Models\Employee;

class AdminEmployeeDelete extends Component
{
    public $employee;
    public $confirm = False;

    public function mount($employeeId)
    {
        $this->employee = Employee::find($employeeId);
    }

    public function submit()
    {
        // Detach jobs from employee.
        foreach($this->employee->jobs as $job) {
            $this->employee->jobs()->detach($job->id);
        }

        $this->employee->delete();

        session()->flash('message', 'Klusser verwijderd!');

        return redirect()->to('/admin?slide=1');
    }

    public function render()
    {
        return view('livewire.admin.employee.admin-employee-delete');
    }
}
