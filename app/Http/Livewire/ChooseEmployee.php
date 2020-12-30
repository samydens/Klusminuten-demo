<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;

class ChooseEmployee extends Component
{
    public $allEmployees;

    public function mount()
    {
        $this->allEmployees = Employee::all();
    }
    
    public function render()
    {
        return view('livewire.choose-employee')
        ->extends('layouts.main')
        ->section('content');
    }

}
