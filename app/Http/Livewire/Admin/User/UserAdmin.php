<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class UserAdmin extends Component
{
    public $query;
    public $users;

    public function render()
    {
        $query = '%'.$this->query.'%';

        $this->users = DB::table('users')
            ->where('name', 'like', $query)
            ->get();
        
        return view('livewire.admin.user.user-admin');
    }
}
