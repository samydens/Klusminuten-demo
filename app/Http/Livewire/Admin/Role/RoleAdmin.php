<?php

namespace App\Http\Livewire\Admin\Role;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleAdmin extends Component
{
    public $query;

    public function render()
    {
        $query = '%'.$this->query.'%';
        
        return view('livewire.admin.role.role-admin', [
            'roles' => Role::where('name', 'like', $query)
                ->get(),
        ]);
    }
}
