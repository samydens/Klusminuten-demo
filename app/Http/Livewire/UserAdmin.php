<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserAdmin extends Component
{
    // All users
    public $users;

    // all excisting roles
    public $roles;

    // filter input field
    public $role;

    public function mount()
    {
        // Get all users
        $this->users = User::all();

        // Get all excisting roles
        $this->roles = Role::all()->pluck('name');
    }

    public function getUserRoles($user)
    {
        // Get all roles the user has
        return $user->getRoleNames();
    }

    public function updated($rol)
    {
        // Check if rol == 5 else get all users with role == $rol
        if ($this->role == 5) {
            $this->users = User::all();
        } else {
            $this->users = User::role($this->role)->get();
        }
    }

    public function render()
    {
        return view('livewire.admin.user-admin')
            ->extends('layouts.admin')
            ->section('content');
    }
}
