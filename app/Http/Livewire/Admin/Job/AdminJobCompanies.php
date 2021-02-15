<?php

namespace App\Http\Livewire\Admin\Job;

use Livewire\Component;
use App\Models\Company;

class AdminJobCompanies extends Component
{
    public $job;
    public $companies;
    public $company;

    protected $messages = [
        'required' => 'Dit veld is verplicht'
    ];

    protected $rules = [
        'company' => 'required'
    ];

    public function mount($job)
    {
        $this->job = $job;
        $this->companies = Company::all();
        
        if (isset($job->company)) {
            $this->company = $job->company->id;
        }
    }

    public function updatedCompany()
    {
        $this->validate();

        $this->job->company_id = $this->company;
        $this->job->save();

        session()->flash('message', 'Opgeslagen!');
    }

    public function render()
    {
        return view('livewire.admin.job.admin-job-companies');
    }
}
