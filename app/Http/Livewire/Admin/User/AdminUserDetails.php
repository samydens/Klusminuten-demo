<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;

class AdminUserDetails extends Component
{
    public $user;

    protected $rules = [
        'user.name' => 'required',
        'user.email' => 'required'
    ];

    public function updatedUser()
    {
        $this->user->save();

        session()->flash('message', 'Wijzigingen opgeslagen!');
    }

    public function render()
    {
        return view('livewire.admin.user.admin-user-details');
    }
}
