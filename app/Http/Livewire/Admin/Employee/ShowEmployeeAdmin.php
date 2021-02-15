<?php

namespace App\Http\Livewire\Admin\Employee;

use Livewire\Component;
use App\Models\Employee;

class ShowEmployeeAdmin extends Component
{
    public $employee;
    public $hasUser;

    public function mount($id)
    {
        $this->employee = Employee::find($id);

        if ($this->employee->user) {
            $this->hasUser = True;
        }
    }

    public function render()
    {
        return view('livewire.admin.employee.show-employee-admin')
        ->extends('layouts.show')
        ->section('content');
    }
}
