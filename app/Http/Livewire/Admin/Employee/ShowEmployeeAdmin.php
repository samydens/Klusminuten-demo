<?php

namespace App\Http\Livewire\Admin\Employee;

use Livewire\Component;
use App\Models\Employee;

class ShowEmployeeAdmin extends Component
{
    public $employeeId; // ID of employee.
    public $hasUser = False;

    public function mount($id)
    {
        // Assign passed $id to public $employeeId.
        $this->employeeId = $id;

        if (Employee::find($id)->user) {
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
