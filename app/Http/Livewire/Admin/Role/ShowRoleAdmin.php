<?php

namespace App\Http\Livewire\Admin\Role;

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
        return view('livewire.admin.role.show-role-admin')
            ->extends('layouts.show')
            ->section('content');
    }
}
