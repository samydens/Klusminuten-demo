<?php

namespace App\Http\Livewire\Admin\Role;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminRolePermission extends Component
{
    public $role;
    public $newPermission = False;
    public $newPermissionId;

    public $listeners = ['refresh' => 'render'];

    public function detachPermission($id)
    {
        $this->role->revokePermissionTo($id);
        $this->emit('refresh');
    }

    public function updatedNewpermissionid()
    {
        $this->role->givePermissionTo($this->newPermissionId);
        $this->reset('newPermission');
        
        $this->emit('refresh');
    }

    public function render()
    {
        return view('livewire.admin.role.admin-role-permission', [
            'permissions' => Permission::all(),
        ]);
    }
}
