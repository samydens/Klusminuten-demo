<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;

class EmployeeAdmin extends Component
{
    public $query; // models to searchbar.
    public $employees; // results of search query.

    public function deleteEmployee($id)
    {
        $employee = Employee::find($id);
        if ($employee->jobs) {
            $jobs = $employee->jobs;

            foreach ($jobs as $job) {
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
        $this->employees = Employee::where('name', 'like', $query)->get();
        
        return view('livewire.employee-admin');
    }
}
