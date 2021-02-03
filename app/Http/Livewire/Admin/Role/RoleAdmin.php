<?php

namespace App\Http\Livewire\Admin\Role;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleAdmin extends Component
{
    public $query;
    public $roles;

    public function render()
    {
        // Query can be in a sentence.
        $query = '%'.$this->query.'%';

        // Get all records where name is like query.
        $this->roles = Role::where('name', 'like', $query)
            ->get();
        
        return view('livewire.admin.role.role-admin');
    }
}
