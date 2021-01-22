<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Minute;
use App\Models\Material;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MinuteMaterial extends Component
{
    public $minutes;
    public $materials;
    public $jobId;

    public function mount($id)
    {
        // Assign passed $id to public $jobId.
        $this->jobId = $id;

        // Set carbon language to nl.
        Carbon::setLocale('nl');

        // Get all minute records of current job grouped by date.
        $this->minutes = Minute::where('job_id', $id)
            ->orderByDesc('created_at')
            ->get()
            ->groupBy(function($item) {
                if ($item->created_at->isToday()) {
                    return 'Vandaag';
                }

                if ($item->created_at->isYesterday()) {
                    return 'Gisteren';
                } 
                
                if (!$item->created_at->isToday() && !$item->created_at->isYesterday()) {
                    return $item->created_at->formatLocalized('%d %B %y');
                }
            })
            ->toBase();
        
        // Get all material records of current job grouped by date.
        $this->materials = Material::where('job_id', $id)
            ->orderByDesc('created_at')
            ->get()
            ->groupBy(function($item) { 

                if ($item->created_at->isToday()) {
                    return 'Vandaag';
                }

                if ($item->created_at->isYesterday()) {
                    return 'Gisteren';
                } 
                
                if (!$item->created_at->isToday() && !$item->created_at->isYesterday()) {
                    return $item->created_at->formatLocalized('%d %B %y');
                }
            })
            ->toBase();
    }

    public function render()
    {
        return view('livewire.minute-material')
        ->extends('layouts.show')
        ->section('content');
    }
}
