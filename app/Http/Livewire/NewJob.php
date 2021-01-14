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
    public $client = '';
    public $step = 0;
    public $job = '';
    public $photo = '';
    public $selectEmp = [];

    public $customerIndex, $employeeIndex;

    private $stepActions = [
        'submit0', // Title, desc & photo.
        'submit1', // Client.
        'submit2', // Employee
        'submit3', // Agreements (submit job to DB)
        'submit4', // new client
        'submit5', // new customer
    ];

    protected $messages = [
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

    public function mount()
    {
        $this->customerIndex = Client::all();
        $this->employeeIndex = Employee::all();
    }

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
            'job.title' => 'required|max:255',
            'job.desc' => 'required',
            'photo' => 'max:2048|mimes:jpg,png,jpeg|nullable'
        ]);

        if ($this->photo) {
            $this->job['photo_url'] = $this->photo->store('photos', 'public');
        } else {
            $this->job['photo_url'] = 'photos/bathroom.jpg';
        }

        $this->step++;
    }

    public function submit1()
    {
        $this->validate([
            'job.client_id' => 'required'
        ]);

        $client = Client::find($this->job['client_id']);
        $this->job['location'] = $client->city;

        $this->step++;
    }

    public function submit2()
    {
        $this->validate([
            'selectEmp' => 'required' 
        ]);

        $this->step++;
    }

    public function addField()
    {
        $this->selectEmp[] = '';
    }

    public function deleteFieldById($id)
    {
        unset($this->selectEmp[$id]);
    }

    public function submit3()
    {
        $this->validate([
            'job.agr_minutes' => 'required|max:9999|integer',
            'job.agr_material' => 'required|max:999999.99'
        ]);

        $job = Job::create([
            'title' => $this->job['title'],
            'desc' => $this->job['desc'],
            'photo' => $this->job['photo_url'],
            'location' => $this->job['location'],
            'user_id' => Auth::id(),
            'client_id' => $this->job['client_id'],
            'agr_minutes' => $this->job['agr_minutes'],
            'agr_material' => $this->job['agr_material']
        ]);

        foreach($this->selectEmp as $employee) {
            $job->employees()->attach($employee);
        }

        $this->reset(['job', 'photo', 'selectEmp']);

        $this->step = 0;
    }

    
    public function submit4()
    {
        $client = $this->client;
        
        $this->validate([
            'client.full_name' => 'required|max:255',
            'client.adres' => 'required|max:255',
            'client.zip' => 'required|max:255',
            'client.city' => 'required|max:255',
            'client.client_phone' => 'required|numeric', 
            'client.mail' => 'required|email|max:255',
        ]);
            
        $client = Client::create([
            'full_name' => $client['full_name'],
            'adres' => $client['adres'],
            'zip' => $client['zip'],
            'city' => $client['city'],
            'phone_number' => $client['client_phone'],
            'mail' => $client['mail'],
        ]);
            
        $this->job['client_id'] = $client->id;
        $this->job['location'] = $client->city;
        
        $this->reset('client');
        
        $this->step = 2;
    }
            
    public function submit5()
    {
        $employee = $this->employee;
        
        $this->validate([
            'employee.name' => 'required|max:255',
            'employee.vakman_id' => 'numeric|required',
            'employee.employee_phone' => 'numeric|required',
        ]);
            
        $employee = Employee::create([
            'name' => $employee['name'],
            'vakman_id' => $employee['vakman_id'],
            'phone_number' => $employee['employee_phone']
        ]);
                
        $this->employeeIndex = Employee::all();
        $this->selectEmp[] = strval($employee->id);
                
        $this->reset('employee');
        
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
        return view('livewire.new-job')
        ->extends('layouts.main');
    }
}
