<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Material;
use Illuminate\Support\Facades\Auth;

class AddMaterial extends Component
{
    public $m;
    public $jobId;

    protected $rules = [
        'm.title' => 'required|max:255',
        'm.amount' => 'required',
        'm.desc' => 'max:255',
    ];

    protected $messages = [
        'required' => 'Dit veld is verplicht',
        'max' => 'Maximaal 255 tekens',
    ];

    public function mount($id) 
    {
        // Set jobId to passed id
        $this->jobId = $id;
    }

    public function addMaterial()
    {
        // Validate user input
        $this->validate();

        // Add new material to database
        $material = new Material;
        $material->job_id = $this->jobId;
        $material->user_id = Auth::id();
        $material->title = $this->m['title'];
        $material->amount = $this->m['amount'];
        $material->desc = $this->m['desc'];
        $material->save();

        session()->flash('message', 'Kosten toegevoegd');

        // Empty input fields
        $this->m = "";
    }

    public function render()
    {
        return view('livewire.add-material')
        ->extends('klusminuten.layout.timer')
        ->section('content');
    }
}
