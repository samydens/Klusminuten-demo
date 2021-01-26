<?php

namespace App\Http\Livewire;

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
        $record = Minute::find($recordId);
        $this->minutes = round($record->total / 60);

        if ($title) {
            $this->title = $record->job->title;
        } else {
            $this->title = $record->user->employee->name;
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
        return view('livewire.admin-minutes');
    }
}
