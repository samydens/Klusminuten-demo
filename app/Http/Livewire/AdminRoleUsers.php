<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use App\Models\User;


class AdminRoleUsers extends Component
{
    public $role;
    public $users;
    public $newUser = False;
    public $newUserId;
    public $allUsers;

    public function mount($roleId)
    {
        $this->role = Role::find($roleId);
        $this->users = $this->role->users;
        $this->allUsers = User::all();
    }

    public function detachUser($id)
    {
        User::find($id)->removeRole($this->role);

        $this->refresh();
    }

    public function submit()
    {
        User::find($this->newUserId)->assignRole($this->role);

        $this->reset('newUser');
        $this->refresh();
    }

    public function refresh()
    {
        $this->users = Role::find($this->role->id)->users;
    }

    public function render()
    {
        return view('livewire.admin-role-users');
    }
}
