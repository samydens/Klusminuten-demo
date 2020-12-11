<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Material;
use Illuminate\Support\Facades\Auth;

class AddMaterial extends Component
{
    public $mtrl;
    public $jobId;

    protected $rules = [
        'mtrl.title' => 'required|max:255',
        'mtrl.amount' => 'required',
        'mtrl.desc' => 'max:255',
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
        $material->title = $this->mtrl['title'];
        $material->amount = str_replace(',', '.', $this->mtrl['amount']);
        $material->desc = $this->mtrl['desc'];
        $material->save();

        // Redirect user to home with message
        session()->flash('message', 'Kosten toegevoegd!');
        return redirect()->to('/home');

        // Empty input fields
        $this->mtrl = "";
    }

    public function render()
    {
        return view('livewire.add-material')
        ->extends('klusminuten.layout.timer')
        ->section('content');
    }
}
