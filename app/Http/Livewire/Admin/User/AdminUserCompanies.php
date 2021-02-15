<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;
use App\Models\Company;

class AdminUserCompanies extends Component
{
    public $user;

    protected $rules = [
        'user.company_id' => 'numeric'
    ];

    public function updatedUser()
    {
        $this->validate();
        $this->user->save();
        
        session()->flash('message', 'Wijzigingen opgeslagen!');
    }

    public function render()
    {
        return view('livewire.admin.user.admin-user-companies', [
            'companies' => Company::all(),
        ]);
    }
}
