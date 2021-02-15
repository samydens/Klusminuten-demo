<?php

namespace App\Http\Livewire\Admin\Role;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class ShowRoleAdmin extends Component
{
    public $role;

    public function mount($id)
    {
        $this->role = Role::find($id);
    }

    public function render()
    {
        return view('livewire.admin.role.show-role-admin')
            ->extends('layouts.show')
            ->section('content');
    }
}
