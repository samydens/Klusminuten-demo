<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;
use App\Models\Minute;

class AdminMinutes extends Component
{
    public $record;
    public $edit = False;
    public $minutes;
    public $title;

    public function mount($recordId, $title)
    {
        $this->record = Minute::find($recordId);
        $this->minutes = round($this->record->total / 60);

        if ($title) {
            $this->title = $this->record->job->title;
        } else {
            $this->title = $this->record->user->employee->name;
        }
    }

    public function submit()
    {
        $this->record->total = round($this->minutes * 60);
        $this->record->save();
        
        $this->reset('edit');
    }
    
    public function render()
    {
        return view('livewire.admin.components.admin-minutes');
    }
}
