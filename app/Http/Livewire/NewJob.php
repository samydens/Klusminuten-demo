<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Job;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class NewJob extends Component
{
    use WithFileUploads;

    public $employee = '';
    public $client = [];
    public $step = 0;
    public $job = '';
    public $photo = '';
    public $selectEmp = [];
    public $selectClient = [];


    private $stepActions = [
        'submit0',
        'submit1',
        'submit2',
        'submit3', 
        'submit4', 
        'submit5',
    ];

    protected $messages = [
        'job.title.required' => 'Vul een titel in',
        'required' => 'Dit veld is verplicht',
        'job.title.max' => 'Naam is te lang',
        'job.desc.max' => 'Omschrijving is te lang',
        'photo.max' => 'Foto is te groot',
        'photo.mimes' => 'Upload een JPG of PNG',
        'email' => 'Voer een geldig E-mail adres in',
        'employee.max' => 'Naam is te lang',
        'selectEmp.required' => 'Voeg een medewerker toe',
        'client.mail.unique' => 'Dit E-mail adres is al in gebruik' 
    ];

    public function submit()
    {
        $action = $this->stepActions[$this->step];
        $this->$action();
    }

    public function previousStep()
    {
        $this->step--;
    }

    public function updatedphoto()
    {
        $this->validate([
            'photo' => 'max:2048|mimes:jpg,png,jpeg|nullable'
        ]);
    }

    public function submit0()
    {
        $this->validate([
            'job.title' => 'max:255|required',
            'job.desc' => 'max:255|nullable',
            'photo' => 'max:2048|mimes:jpg,png,jpeg|nullable'
        ]);

        if ($this->photo) {
            $this->job['photo'] = $this->photo->store('photos', 'public');
        } else {
            $this->job['photo'] = 'photos/bathroom.jpg';
        }

        $this->step++;
    }

    public function submit1()
    {
        $this->step++;
    }

    public function submit2()
    {
        $this->step++;
    }

    public function addField()
    {
        $this->selectEmp[] = '';
    }

    public function addClientField()
    {
        $this->selectClient[] = '';
    }

    public function deleteFieldById($id)
    {
        unset($this->selectEmp[$id]);
    }

    public function deleteClientFieldById($id)
    {
        unset($this->selectClient[$id]);
    }

    public function submit3()
    {
        $this->validate([
            'job.agr_minutes' => 'max:9999|integer|nullable',
            'job.agr_material' => 'max:999999.99|nullable'
        ]);

        $this->job['user_id'] = Auth()->id();
        $this->job['location'] = 'locatie';

        $job = Job::create($this->job);

        foreach($this->selectEmp as $employee) {
            $job->employees()->attach($employee);
        }

        foreach ($this->selectClient as $client) {
            $job->clients()->attach($client);
        }

        $this->reset(['job', 'photo', 'selectEmp']);

        $this->step = 0;

        session()->flash('message', 'Klus toegevoegd aan klusvijver!');

        return redirect('/klusvijver');
    }

    
    public function submit4()
    {
        $this->validate([
            'client.full_name' => 'required|max:255',
            'client.adres' => 'max:255|required',
            'client.zip' => 'max:255|nullable',
            'client.city' => 'max:255|required',
            'client.phone_number' => 'numeric|nullable', 
            'client.mail' => 'max:255|email|required',
        ]);

        $client = Client::create($this->client);
        
        $this->customerIndex = Client::all();
        $this->selectClient[] = strval($client->id);
        
        $this->job['location'] = $client->city;
        
        $this->reset('client');
        
        $this->step = 1;
    }
            
    public function submit5()
    {
        $this->validate([
            'employee.name' => 'required|max:255',
            'employee.vakman_id' => 'numeric|nullable',
            'employee.phone_number' => 'numeric|nullable',
        ]);

        $employee = Employee::create($this->employee);
                
        $this->reset('employee');
        
        $this->employeeIndex = Employee::all();
        $this->selectEmp[] = strval($employee->id);
        
        $this->step = 2;
    }

    public function newClient()
    {
        $this->step = 4;
    }
    
    public function newEmployee()
    {
        $this->step = 5;
    }

    public function backFromNew()
    {
        $this->step = $this->step - 3;
    }

    public function render()
    {
        return view('livewire.new-job', [
            'customerIndex' => Client::all(),
            'employeeIndex' => Employee::all(),
        ])
        ->extends('layouts.main');
    }
}
