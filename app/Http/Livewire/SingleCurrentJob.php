<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SingleCurrentJob extends Component
{
    public $job;
    
    public function render()
    {
        return view('livewire.single-current-job');
    }
}
