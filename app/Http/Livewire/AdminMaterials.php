<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Material;

class AdminMaterials extends Component
{
    public $record;
    public $edit = False;
    public $material;

    public function mount($materialId)
    {
        $this->record = Material::find($materialId);
        $this->material = $this->record->amount;
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
