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

    protected $rules = [
        'job.title' => 'required|max:20',
        'job.desc' => 'required|max:200',
        'job.agr_minutes' => 'required|max:999999|numeric',
        'job.agr_material' => 'required|max:999999|numeric',
        'job.location' => 'required',
        'job.photo' => 'image|max:1024',
    ];

    protected $messages = [
        'required' => 'Dit veld is verplicht',
        'numeric' => 'Moet uit cijfers bestaan',
        'max' => 'Meer dan 6 getallen',
        'job.title.max' => 'Naam is te lang',
        'job.desc.max' => 'Omschrijving is te lang',
    ];

    public function submit() {

        $this->validate();

        

        $job = new Job;
        $job->title = $this->job['title'];
        $job->desc = $this->job['desc'];
        $job->agr_minutes = $this->job['agr_minutes'];
        $job->agr_material = $this->job['agr_material'];
        $job->location = $this->job['location'];
        // if (empty($this->job['photo'])) {
        //     $job->photo = 'img/bathroom.jpg';
        // } else {
        //     $job->photo = $this->job['photo']->store('photos');
        // }
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
