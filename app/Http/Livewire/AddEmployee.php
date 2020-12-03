<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;

class AddEmployee extends Component
{
    public $employee;

    protected $rules = [
        'employee.name' => 'required|max:40|min:2|',
        'employee.id' => 'required|numeric',
        'employee.phone_number' => 'required|min:6|numeric',
    ];

    protected $messages = [
        'required' => 'Dit veld is verplicht',
        'employee.name.max' => 'Naam is te lang',
        'employee.name.min' => 'Naam is te kort',
        'employee.id.numeric' => 'ID moet uit cijfers bestaan',
        'employee.phone_number.min' => 'Telefoonnummer is te kort',
        'employee.phone_number.numeric' => 'Telefoonnummer moet uit cijfers bestaan',
    ];

    public function submit() {
        
        $this->validate();

        $newEmployee = new Employee;
        $newEmployee->name = $this->employee['name'];
        $newEmployee->vakman_id = $this->employee['id'];
        $newEmployee->phone_number = $this->employee['phone_number'];
        $newEmployee->save();

        $this->employee = '';

        session()->flash('message', 'Opgeslagen.');
    }

    public function render()
    {
        return view('livewire.add-employee');
    }
}
