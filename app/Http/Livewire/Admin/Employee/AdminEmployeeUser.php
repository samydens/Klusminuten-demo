<?php

namespace App\Http\Livewire\Admin\Employee;

use Livewire\Component;
use App\Models\Employee;
use App\Models\User;

class AdminEmployeeUser extends Component
{
    public $employee;
    public $userId;
    public $allUsers;
    public $updated = False;

    protected $rules = [
        'userId' => 'numeric',
    ];

    public function mount($employeeId)
    {
        $this->employee = Employee::find($employeeId);
        
        // Public userId = user_id field of employee.
        $this->userId = $this->employee->user_id;
        $this->allUsers = User::all();
    }

    public function submit()
    {
        // Update employees user id.
        $this->employee->user_id = $this->userId;
        $this->employee->save();

        // Update selected user's employee_id to employee.
        $user = User::find($this->employee->user_id);
        $user->employee_id = $this->employee->id;
        $user->save();

        $this->reset('updated');
    }

    public function updateduserId()
    {
        $this->updated = True;
    }

    public function render()
    {
        return view('livewire.admin.employee.admin-employee-user');
    }
}
