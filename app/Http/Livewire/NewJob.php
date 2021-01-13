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

    public $step, $client, $employee;
    public $job, $photo;
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
        'email' => 'Voer een geldig E-mail adres in'
    ];

    public function mount()
    {
        $this->step = 0;
        $this->customerIndex = Client::all();
        $this->employeeIndex = Employee::all();
    }

    public function submit()
    {
        // Get the submit function belonging to current step.
        $action = $this->stepActions[$this->step];

        // Execute function.
        $this->$action();
    }

    public function previousStep()
    {
        $this->step--;
    }

    public function updatedphoto()
    {
        // Live image validation
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

        // Set standard image if no image is uploaded.
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
        // Hier komt nog validation.
        $this->step++;
    }

    public function addField()
    {
        // Add a new employee field.
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

        // unset($this->job);
        // unset($this->photo);
        // unset($this->selectEmp);

        $this->reset(['job', 'photo', 'selectEmp']);

        $this->step = 0;
        
        // return redirect()->to('/home');
    }

    public function newClient()
    {
        // Sets step to 4 (new client form.)
        $this->step = 4;
    }
    
    public function newEmployee()
    {
        // Sets step to 5 (add new employee.)
        $this->step = 5;
    }

    public function submit4()
    {
        $client = $this->client;

        $this->validate([
            'client.full_name' => 'required|max:255',
            'client.adres' => 'required|max:255',
            'client.zip' => 'required|max:9999',
            'client.city' => 'required|max:100',
            'client.mail' => 'required|email'
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

        // unset($this->client);
        $this->reset('client');

        $this->step = 2;
    }

    public function submit5()
    {
        $employee = $this->employee;

        $this->validate([
            'employee.name' => 'required',
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
        
        // unset($this->employee);
        $this->reset('employee');

        $this->step = 2;
    }

    public function backFromNew()
    {
        // Go back to previous but from new client or employee pages.
        $this->step = $this->step - 3;
    }

    public function render()
    {
        return view('livewire.new-job')
        ->extends('layouts.admin');
    }
}
