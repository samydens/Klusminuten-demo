<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class AddJob extends Component
{
    use WithFileUploads;

    public $job;
    public $photo;

    protected $rules = [
        'job.title' => 'required|max:20',
        'job.desc' => 'required|max:200',
        'job.agr_minutes' => 'required|max:999999|numeric',
        'job.agr_material' => 'required|max:999999|numeric',
        'job.location' => 'required',
        'photo' => 'mimes:png,jpg,jpeg|max:2024|nullable',
    ];

    protected $messages = [
        'required' => 'Dit veld is verplicht',
        'numeric' => 'Moet uit cijfers bestaan',
        'max' => 'Meer dan 6 getallen',
        'job.title.max' => 'Naam is te lang',
        'job.desc.max' => 'Omschrijving is te lang',
        'photo.max' => 'Foto is te groot',
        'photo.mimes' => 'Upload een JPG of PNG',
    ];

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'max:2048|mimes:jpg,png,jpeg|nullable',
        ]);
    }

    public function submit() {

        $this->validate();

        if ($this->photo) {
            $url = $this->photo->store('photos', 'public');
        } else {
            $url = 'photos/bathroom.jpg';
        }

        $job = new Job;
        $job->title = $this->job['title'];
        $job->desc = $this->job['desc'];
        $job->agr_minutes = $this->job['agr_minutes'];
        $job->agr_material = $this->job['agr_material'];
        $job->location = $this->job['location'];
        $job->photo = $url;
        $job->user_id = Auth::id();
        $job->save();

        $this->job = '';

        session()->flash('message', 'Opgeslagen.');
    }

    public function render()
    {
        return view('livewire.add-job');
    }
}
