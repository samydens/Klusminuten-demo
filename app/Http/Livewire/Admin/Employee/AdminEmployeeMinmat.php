<?php

namespace App\Http\Livewire\Admin\Employee;

use Livewire\Component;
use App\Models\Material;
use App\Models\Minute;
use App\Models\Employee;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class AdminEmployeeMinmat extends Component
{
    public $minutes;
    public $materials;
    public $user_id;

    public function mount($employeeId)
    {
        $user_id = Employee::find($employeeId)->user->id;
        $this->user_id = $user_id;


        // Set carbon language to nl.
        Carbon::setLocale('nl');

        // Get 2 minute records grouped by date.
        $this->minutes = Minute::where('user_id', $user_id)
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

        // Get 2 minute records grouped by date.
        $this->materials = Material::where('user_id', $user_id)
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
        return view('livewire.admin.employee.admin-employee-minmat');
    }
}
