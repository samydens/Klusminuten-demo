<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Minute;
use Illuminate\Support\Facades\DB;

class NewTimer extends Component
{
    public $startTime;
    public $stopTime;
    public $running;
    public $jobId;
    public $recordId;
    public $editMode;
    public $total;

    public function mount($id)
    {
        $this->jobId = $id;

        $record = Minute::where([['stopped', '=', 0], ['job_id', '=', $id]])->first();
        
        if (isset($record)) {
            $this->recordId = $record->id;
            $this->startTime = $record->start_time;
            $this->running = $record->running;
        }
    }

    public function startTimer()
    {
        if (empty($this->recordId)) {
            $record = new Minute;
            $record->user_id = Auth::id();
            $record->job_id = $this->jobId;
            $record->start_time = Carbon::now();
            $record->running = 1;
            $record->save();

            $this->startTime = $record->start_time;
            $this->recordId = $record->id;
        } else {
            $record = Minute::find($this->recordId);
            $record->start_time = Carbon::now();
            $record->running = 1;
            $record->save();

            $this->startTime = $record->start_time;
        }

        $this->running = 1;
        $this->editMode = 0;
    }

    public function pauseTimer()
    {
        $record = Minute::find($this->recordId);
        $record->stop_time = Carbon::now();
        $record->total = $record->total + ($this->startTime->diffInSeconds(Carbon::now()));
        $record->running = 0;
        $record->save();

        $this->running = 0;
        $this->stopTime = $record->stop_time;
    }

    public function submitTimer()
    {
        $record = Minute::find($this->recordId);
        $record->stopped = 1;
        $record->save();

        $this->recordId = NULL;

        session()->flash('message', 'Minuten toegevoegd aan totaal!');
        return redirect()->to('/dashboard');
    }

    public function getCurrentMin()
    {
        $record = Minute::find($this->recordId);
        if ($this->running) {
            return round(($record->total + $this->startTime->diffInSeconds(Carbon::now())) / 60 % 60); 
        } else {
            return round($record->total / 60 % 60);
        }
    }

    public function getTotalMin()
    {
        $records = Minute::where([['stopped', '=', 1], ['job_id', '=', $this->jobId]])->select('total')->get();
        return round($records->sum('total') / 60 % 60); 
    }

    public function editMode()
    {
        $this->editMode = 1;
        $this->total = $this->getCurrentMin();
    }

    public function submitEdit()
    {
        $record = Minute::find($this->recordId);
        $record->total = ($this->total * 60);
        $record->stopped = 1;
        $record->save();

        $this->recordId = NULL;
        $this->editMode = 0;
        $this->running = 0;

        session()->flash('message', 'Minuten toegevoegd aan totaal!');
        return redirect()->to('/home');
    }

    public function render()
    {
        return view('livewire.new-timer')
        ->extends('klusminuten.layout.timer')
        ->section('content');
    }
}
