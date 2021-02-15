<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use App\Models\User;

class AdminUserRole extends Component
{
    public User $user;
    public $newRoleId;
    public $newRole = False;

    public function updatedNewRoleId()
    {
        $this->user->assignRole($this->newRoleId);
        
        session()->flash('message', 'Wijzigingen opgeslagen!');
        $this->reset(['newRoleId', 'newRole']);
    }

    public function removeRole($role)
    {
        $this->user->removeRole($role);
    }

    public function render()
    {
        return view('livewire.admin.user.admin-user-role', [
            'roles' => Role::all(),
        ]);
    }
}
