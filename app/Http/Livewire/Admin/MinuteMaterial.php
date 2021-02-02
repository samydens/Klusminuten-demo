<?php

namespace App\Http\Livewire\Admin;

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
    public $title; // Boolean
    public $type; // user_id or job_id

    protected $queryString = ['type']; // which column from db look at. (optional)

    public function mount($id)
    {
        // if user id titles are showing job, else titles are showing user
        if ($this->type == 'user_id') {
            $this->title = True;
        }

        if ($this->type == 'job_id') {
            $this->title = False;
        }

        // Get minutes and materials sorted by date.
        $this->getMinutes($this->type, $id);
        $this->getMaterials($this->type, $id);
    }

    public function getMaterials($type, $id)
    {
        $this->materials = Material::where($type, $id)
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

    public function getMinutes($type, $id)
    {
        $this->minutes = Minute::where($type, $id)
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
        return view('livewire.admin.minute-mateial')
        ->extends('layouts.show')
        ->section('content');
    }
}
