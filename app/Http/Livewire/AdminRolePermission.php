<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminRolePermission extends Component
{
    public $role;
    public $permissions;
    public $newPermission = False;
    public $newPermissionId;
    public $allPermissions;

    public function mount($roleId)
    {
        $this->role = Role::find($roleId);
        $this->permissions = $this->role->permissions;
        $this->allPermissions = Permission::all();
    }

    public function detachPermission($id)
    {
        $this->role->revokePermissionTo(Permission::find($id));

        $this->refresh();
    }

    public function submit()
    {
        $this->role->givePermissionTo(Permission::find($this->newPermissionId));
        
        $this->reset('newPermission');
        $this->refresh();
    }

    public function refresh()
    {
        $this->permissions = Role::find($this->role->id)->permissions;
    }

    public function render()
    {
        return view('livewire.admin-role-permission');
    }
}
