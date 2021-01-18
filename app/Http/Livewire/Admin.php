<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Admin extends Component
{
    public $slide = 0; 

    public function render()
    {
        return view('livewire.admin')
        ->extends('layouts.admin');
    }
}
