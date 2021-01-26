<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Material;

class AdminMaterials extends Component
{
    public $record;
    public $edit = False;
    public $material;
    public $title;

    public function mount($materialId, $title)
    {
        $record = Material::find($materialId);
        $this->material = $record->amount;

        if ($title) {
            $this->title = $record->job->title;
        } else {
            $this->title = $record->user->name;
        }
    }

    public function submit()
    {
        $this->record->amount = $this->material;
        $this->record->save();

        $this->reset('edit');
    }

    public function render()
    {
        return view('livewire.admin-materials');
    }
}
