<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Job;

class Multipleemployeetest extends Component
{
    public $selectEmp = []; 
    public $allEmployees;
    public $newEmployee;

    public function addField()
    {
        // Add first field.
        $this->selectEmp[] = ''; 

        // Get all employees.
        $this->allEmployees = Employee::all();
    }

    public function submitNewEmployee()
    {
        // Save new employee to database.
        $employee = new Employee;
        $employee->name = $this->newEmployee['name'];
        $employee->vakman_id = $this->newEmployee['vakman_id'];
        $employee->phone_number = $this->newEmployee['phone'];
        $employee->save();

        // Refresh all employees.
        $this->allEmployees = Employee::all();
        
        // Add ID to selectEmp array.
        $this->selectEmp[] = $employee->id;
        
        // Empty input field.
        $this->newEmployee = '';
    }

    public function render()
    {
        return view('livewire.multipleemployeetest')
        ->extends('layouts.admin')
        ->section('content');
    }
}
