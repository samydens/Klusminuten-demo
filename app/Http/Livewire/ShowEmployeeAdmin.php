<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowEmployeeAdmin extends Component
{
    public $employeeId; // ID of employee.

    public function mount($id)
    {
        // Assign passed $id to public $employeeId.
        $this->employeeId = $id;
    }

    public function render()
    {
        return view('livewire.show-employee-admin')
        ->extends('layouts.show')
        ->section('content');
    }
}
