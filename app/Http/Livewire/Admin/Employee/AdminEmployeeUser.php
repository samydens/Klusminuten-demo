<?php

namespace App\Http\Livewire\Admin\Employee;

use Livewire\Component;
use App\Models\Employee;
use App\Models\User;

class AdminEmployeeUser extends Component
{
    public $employee;

    protected $rules = [
        'employee.user_id' => 'required',
    ];

    public function updatedEmployee()
    {
        $this->validate();

        $this->employee->save();

        session()->flash('message', 'Opgeslagen!');
    }

    public function render()
    {
        return view('livewire.admin.employee.admin-employee-user', [
            'users' => User::all(),
        ]);
    }
}
