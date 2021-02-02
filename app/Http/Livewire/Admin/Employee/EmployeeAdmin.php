<?php

namespace App\Http\Livewire\Admin\Employee;

use Livewire\Component;
use App\Models\Employee;

class EmployeeAdmin extends Component
{
    public $query; 
    public $employees;

    public function deleteEmployee($id)
    {
        $employee = Employee::find($id);
        
        if ($employee->jobs) {
            foreach ($employee->jobs as $job) {
                $employee->jobs()->detach($job->id);
            }
        }

        $employee->delete();
    }

    public function render()
    {
        // query can be in a sentence.
        $query = '%'.$this->query.'%';
        
        // Get all records where name is like query.
        $this->employees = Employee::where('name', 'like', $query)
            ->get();
        
        return view('livewire.admin.employee.employee-admin');
    }
}
