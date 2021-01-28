<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminUserRole extends Component
{
    public $user;
    public $newRole = False;
    public $allRoles;
    public $newRoleId = '';

    public function mount($userId)
    {
        $this->user = User::find($userId);
        $this->allRoles = Role::all();
    }

    public function removeRole($role)
    {
        $this->user->removeRole($role);
    }

    // public function assignRole($id)
    // {
    //     $this->user->assignRole($id);
    //     $this->reset('newRoleId');
    // }

    public function submit()
    {
        $this->user->assignRole($this->newRoleId);
        $this->reset('newRoleId');
        $this->reset('newRole');
    }

    public function render()
    {
        return view('livewire.admin-user-role');
    }
}
