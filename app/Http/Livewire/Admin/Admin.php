<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Admin extends Component
{
    public $slide;

    protected $queryString = ['slide'];

    public function render()
    {
        return view('livewire.admin.admin')
        ->extends('layouts.admin');
    }
}
