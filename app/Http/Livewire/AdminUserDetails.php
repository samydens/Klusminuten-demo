<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AdminUserDetails extends Component
{
    public $userRecord;
    public $user = [];
    public $showSubmit = False;

    public function mount($userId)
    {
        $this->userRecord = User::find($userId);
        $this->user['name'] = $this->userRecord->name;
        $this->user['email']= $this->userRecord->email;
    }

    public function submit()
    {
        $this->userRecord->name = $this->user['name'];
        $this->userRecord->email = $this->user['email'];
        $this->userRecord->save();

        $this->reset('showSubmit');

        session()->flash('message', 'wijzigingen opgeslagen');
    }

    public function updateduser()
    {
        $this->showSubmit = True;
    }

    public function render()
    {
        return view('livewire.admin-user-details');
    }
}
