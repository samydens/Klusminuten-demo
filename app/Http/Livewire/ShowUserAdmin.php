<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowUserAdmin extends Component
{
    public $userId;

    public function mount($id)
    {
        $this->userId = $id;
    }

    public function render()
    {
        return view('livewire.show-user-admin')
        ->extends('layouts.show')
        ->section('content');
    }
}
