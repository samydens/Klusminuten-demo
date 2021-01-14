<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use App\Models\User;

class DeleteEmployees extends Component
{
    public $employees;

    protected $listeners = ['refreshEmployees' => '$refresh'];

    public function mount()
    {
        $this->employees = Employee::all();
    }

    public function deleteEmployee($id)
    {
        $employee = Employee::find($id);

        $jobs = $employee->jobs;
        foreach($jobs as $job)
        {
            $employee->jobs()->detach($job->id);
        }

        $employee->delete();

        $this->emit('refreshEmployees');
    }

    public function render()
    {
        return view('livewire.delete-employees');
    }
}
