<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;
use App\Models\Company;

class AdminUserCompanies extends Component
{
    public $companies;
    public $allCompanies;
    public $newCompany = False;
    public $newCompanyId;
    public $userId;

    public function mount($userId)
    {
        $this->userId = $userId;
        $this->companies = User::find($userId)->companies;
        $this->allCompanies = Company::all();
    }

    public function submit()
    {
        $user = User::find($this->userId);
        $user->companies()->attach($this->newCompanyId);

        $this->reset('newCompanyId');
        $this->reset('newCompany');

        $this->refresh();
    }

    public function detach($id)
    {
        User::find($this->userId)->companies()->detach($id);
        $this->refresh();
    }

    public function refresh()
    {
        $this->companies = User::find($this->userId)->companies;
    }

    public function render()
    {
        return view('livewire.admin.user.admin-user-companies');
    }
}
