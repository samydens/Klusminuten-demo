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
    public $jobId;

    public function mount($jobId)
    {

        // Assign passed $jobId to public $jobId.
        $this->jobId = $jobId;

        // Set carbon language to nl.
        Carbon::setLocale('nl');

        // Get 2 minute records grouped by date.
        $this->minutes = Minute::where('job_id', $jobId)
            ->orderByDesc('created_at')
            ->take(2)
            ->get()
            ->groupBy(function($item) {
                if ($item->created_at->isToday()) {
                    return 'Vandaag';
                }

                if ($item->created_at->isYesterday()) {
                    return 'Gisteren';
                }

                if (!$item->created_at->isToday() && !$item->created_at->isYesterday()) {
                    return $item->created_at->formatLocalized('%d %B %Y');
                }
            })
            ->toBase();

            // Get 2 material records grouped by date.
            $this->materials = Material::where('job_id', $jobId)
                ->orderByDesc('created_at')
                ->take(2)
                ->get()
                ->groupBy(function($item) {
                    if ($item->created_at->isToday()) {
                        return 'Vandaag';
                    }

                    if ($item->created_at->isYesterday()) {
                        return 'Gisteren';
                    }

                    if (!$item->created_at->isToday() && !$item->created_at->isYesterday()) {
                        return $item->created_at->formatLocalized('%d %B %Y');
                    }
                })
                ->toBase();
    }

    public function render()
    {
        return view('livewire.admin-job-minutes-material');
    }
}
