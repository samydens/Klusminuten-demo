<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Material;
use App\Models\Minute;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class AdminJobMinutesMaterial extends Component
{
    public $minutes;
    public $materials;

    public function mount($jobId)
    {
        $this->minutes = Minute::where([['job_id', '=', $jobId], ['created_at', '>=', Carbon::yesterday()]])->get();
        $this->materials = Material::where([['job_id', '=', $jobId], ['created_at', '>=', Carbon::yesterday()]])->get();
    }

    public function render()
    {
        return view('livewire.admin-job-minutes-material');
    }
}
