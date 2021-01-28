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
        $this->record = Material::find($materialId);
        $this->material = $this->record->amount;

        if ($title) {
            $this->title = $this->record->job->title;
        } else {
            $this->title = $this->record->user->employee->name;
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
