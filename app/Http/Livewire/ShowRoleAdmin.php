<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowRoleAdmin extends Component
{
    public $roleId;

    public function mount($id)
    {
        $this->roleId = $id;
    }

    public function render()
    {
        return view('livewire.show-role-admin')
            ->extends('layouts.show')
            ->section('content');
    }
}
