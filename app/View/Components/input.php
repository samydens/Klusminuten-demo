<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    public $id;
    public $label;
    public $type;
    public $prop;
    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $label, $type, $prop, $placeholder)
    {
        $this->id = $id;
        $this->label = $label;
        $this->type = $type;
        $this->prop = $prop;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
