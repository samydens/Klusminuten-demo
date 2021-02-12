<?php

namespace App\Http\Livewire\Admin\Employee;

use Livewire\Component;
use App\Models\Employee;

class AdminEmployeeDetails extends Component
{
    public $employee;

    protected $rules = [
        'employee.name' => 'required',
        'employee.vakman_id' => 'nullable|numeric',
        'employee.phone_number' => 'nullable|numeric'
    ];

    public function updatedEmployee()
    {
        $this->validate();

        $this->employee->save();

        session()->flash('message', 'Opgeslagen!');
    }

    public function render()
    {
        return view('livewire.admin.employee.admin-employee-details');
    }
}
