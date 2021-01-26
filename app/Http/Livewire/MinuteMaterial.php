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
    // public $title;
    // public $recordId;
    // public $column;
    public $type;
    public $recordId;

    protected $queryString = ['type']; // which column from db look at. (optional)

    protected $queryString = ['recordId']; // the job or user id. (optional)

    public function mount($id, $column)
    {
        // Set carbon language to nl.
        Carbon::setLocale('nl');

        $this->id = $id;
        $this->column = $column;

        // Get all minute records of current job grouped by date.
        $this->minutes = Minute::where($column, $id)
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
        $this->materials = Material::where($column, $id)
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
        
        if ($column == 'user_id') {
            $this->title = True;
        } 

        if ($column == 'job_id') {
            $this->title = False;
        }
    }

    public function render()
    {
        return view('livewire.minute-material')
        ->extends('layouts.show')
        ->section('content');
    }
}
