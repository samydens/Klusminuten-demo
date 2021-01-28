<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserAdmin extends Component
{
    public $query;
    public $users;

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
    }

    public function render()
    {
        // Query can be in between other words.
        $query = '%'.$this->query.'%';

        // Get all records where username is like query.
        $this->users = User::where('name', 'like', $query)->get();
        return view('livewire.user-admin');
    }
}
