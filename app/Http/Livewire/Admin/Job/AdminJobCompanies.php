<?php

namespace App\Http\Livewire\Admin\Job;

use Livewire\Component;
use App\Models\Company;
use App\Models\Job;

class AdminJobCompanies extends Component
{
    public $job;
    public $newCompanyId;
    public $newCompany = False;
    public $allCompanies;

    public function mount($job)
    {
        $this->job = $job;
        $this->allCompanies = Company::all();
    }

    public function submit()
    {
        $this->job->companies()->attach($this->newCompanyId);

        $this->reset('newCompany');
        $this->reset('newCompanyId');

        $this->refresh();
    }

    public function detachCompany($id)
    {
        $this->job->companies()->detach($id);
        $this->refresh();
    }

    public function refresh()
    {
        $this->job = Job::find($this->job->id);
    }

    public function render()
    {
        return view('livewire.admin.job.admin-job-companies');
    }
}
