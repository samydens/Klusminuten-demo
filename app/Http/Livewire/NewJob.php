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

    public $step, $job, $client, $employee, $customerIndex, $employeeIndex, $photo, $employeeIds;

    private $stepActions = [
        'submit1', // step 0
        'submit2', // step 1
        'submit3', // step 2
        'submit4', // step 3
        'submitClient', // step 4 (step 1)
        'submitEmployee' // step 5 (step 2)
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

        // Get all clients
        $this->customerIndex = Client::all();

        // Get all employee's
        $this->employeeIndex = Employee::all();
    }

    public function previousStep()
    {
        // decrement step
        $this->step--;
    }

    public function submit()
    {
        // get the submit function belonging to current step
        $action = $this->stepActions[$this->step];

        // execute function
        $this->$action();
    }

    public function updatedphoto()
    {
        // Check if image is valid when uploaded.
        $this->validate([
            'photo' => 'max:2048|mimes:jpg,png,jpeg|nullable'
        ]);
    }

    public function submit1()
    {
        // validate input.
        $this->validate([
            'job.title' => 'required|max:255',
            'job.desc' => 'required',
            'photo' => 'max:2048|mimes:jpg,png,jpeg|nullable'
        ]);

        // if photo is set then use store it, else use standard image for jobs.
        if ($this->photo) {
            $this->job['photo_url'] = $this->photo->store('photos', 'public');
        } else {
            $this->job['photo_url'] = 'photos/bathroom.jpg';
        }

        // Increment step
        $this->step++;
    }

    public function submit2()
    {
        // validate input
        $this->validate([
            'job.client_name' => 'required|max:255'
        ]);

        // Get client ID by name.
        $client = Client::where('full_name', '=', $this->job['client_name'])->first();
        $this->job['client_id'] = $client->id;

        // Get location via client
        $this->job['location'] = $client->city;

        // Increment step.
        $this->step++;
    }

    public function submit3()
    {
        // validate input.
        $this->validate([
            'job.employee_name' => 'required|max:255'
        ]);

        // Get employee ID by name.
        $employee = Employee::where('name', '=', $this->job['employee_name'])->first();
        $this->job['employee_id'] = $employee->id;

        // Increment step.
        $this->step++;
    }

    public function submit4()
    {
        // Validate form input.
        $this->validate([
            'job.agr_minutes' => 'required|max:9999|integer',
            'job.agr_material' => 'required|max:999999.99'
        ]);
        
        // Save new job to database.
        $job = new Job;
        $job->title = $this->job['title'];
        $job->desc = $this->job['desc'];
        $job->photo = $this->job['photo_url'];
        $job->location = $this->job['location'];
        $job->user_id = Auth::id();
        $job->client_id = $this->job['client_id'];
        $job->agr_minutes = $this->job['agr_minutes'];
        $job->agr_material = $this->job['agr_material'];
        $job->save();

        // // Save relation between job and employee.
        // $job->employees()->attach($this->job['employee_id']);

        foreach ($this->employeeIds as $employeeId) {
            $job->employees()->attach($employeeId);
        }
        // Set step to 0.
        $this->step = 0;

        // Empty all modeled variables.
        $this->job = '';
        $this->employee = '';
        $this->client = '';
        $this->photo = '';
    }

    public function newClient()
    {
        // Set step to 4 (add new client.)
        $this->step = 4;
    }
    
    public function newEmployee()
    {
        // Set step to 5 (add new employee.)
        $this->step = 5;
    }

    public function submitClient()
    {
        // Validate input.
        $this->validate([
            'client.full_name' => 'required|max:255',
            'client.adres' => 'required|max:255',
            'client.zip' => 'required|max:9999',
            'client.city' => 'required|max:100',
            'client.mail' => 'required|email'
        ]);

        // Makes code more readable.
        $client = $this->client;
        
        // New client object.
        $newClient  = new Client;

        // Add to client object.
        $newClient->full_name = $client['full_name'];
        $newClient->adres = $client['adres'];
        $newClient->zip = $client['zip'];
        $newClient->city = $client['city'];
        $newClient->phone_number = $client['phone_number'];
        $newClient->mail = $client['mail'];

        // Save client object to DB.
        $newClient->save();

        // These are getting stored in the job table when job is submitted to DB.
        $this->job['client_id'] = $newClient->id;
        $this->job['location'] = $newClient->city;

        // Set step to 2 (next step)
        $this->step = 2;
    }

    public function submitEmployee()
    {
        // Validate input
        $this->validate([
            'employee.name' => 'required',
            'employee.vakman_id' => 'numeric|required',
        ]);

        // Add to employee object
        $employee = $this->employee;
        $newEmployee = new Employee;
        $newEmployee->name = $employee['name'];
        $newEmployee->vakman_id = $employee['vakman_id'];
        $newEmployee->phone_number = $employee['phone'];

        // Save employee object to DB
        $newEmployee->save();

        // Assign id of new employee to id thats going to be stored in job
        $this->job['employee_id'] = $newEmployee->id;

        // Set step to 3 (next step)
        $this->step = 3;
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
