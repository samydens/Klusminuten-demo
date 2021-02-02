<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;

class ShowUserAdmin extends Component
{
    public $userId;

    public function mount($id)
    {
        $this->userId = $id;
    }

    public function render()
    {
        return view('livewire.admin.user.show-user-admin')
        ->extends('layouts.show')
        ->section('content');
    }
}
