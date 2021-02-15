<?php

namespace App\Http\Livewire\Admin\Role;

use Livewire\Component;
use App\Models\User;


class AdminRoleUsers extends Component
{
    public $role;
    public $newUser = False;
    public $newUserId;

    public $listeners = ['refresh' => 'render'];

    public function detachUser($id)
    {
        User::find($id)->removeRole($this->role);

        $this->emit('refresh');
    }

    public function updatedNewuserid()
    {
        User::find($this->newUserId)->assignRole($this->role);

        $this->reset('newUser');
        $this->emit('refresh');
    }

    public function render()
    {
        return view('livewire.admin.role.admin-role-users', [
            'users' => User::all(),
        ]);
    }
}
