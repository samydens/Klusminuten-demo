<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;

class ShowUserAdmin extends Component
{
    public $user;

    public function mount($id)
    {
        $this->user = User::find($id);
    }

    public function render()
    {
        return view('livewire.admin.user.show-user-admin')
        ->extends('layouts.show')
        ->section('content');
    }
}
