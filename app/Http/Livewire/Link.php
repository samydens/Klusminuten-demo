<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Link extends Component
{
    public $link, $title;

    public function mount($link, $title)
    {
        $this->page = $page;
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.link');
    }
}
