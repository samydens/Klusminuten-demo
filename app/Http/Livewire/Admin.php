<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Admin extends Component
{
    public $slide = 0; // 0 = job, 1 = employees, 2 = customers.

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.admin')
        ->extends('layouts.admin');
    }
}
