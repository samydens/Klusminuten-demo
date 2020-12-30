<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class EditUser extends Component
{
    
    public $user; // Current user
    public $role; // Role select input

    protected $rules = [
        'role' => 'required',
    ];

    protected $messages = [
        'required' => 'Selecteer een optie!',
    ];

    public function mount($id)
    {
        $this->user = User::find($id); 
    }

    public function getRoles()
    {
        return Role::all()->pluck('name'); // Return all role names
    }

    public function changeRole()
    {
        $this->validate(); // Validate input

        $this->user->syncRoles([$this->role]); // Change role

        session()->flash('message', 'Wijzigingen opgeslagen'); 
        redirect()->to('/admin/user'); 
    }
    
    public function render()
    {
        return view('livewire.admin.edit-user')
            ->extends('layouts.admin') 
            ->section('content');
    }
}
