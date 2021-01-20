<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;

class EmployeeAdmin extends Component
{
    public $query;
    public $employees;

    public function render()
    {
        $query = '%'.$this->query.'%';
        $this->employees = Employee::where('name', 'like', $query)->get();
        
        return view('livewire.employee-admin');
    }
}
