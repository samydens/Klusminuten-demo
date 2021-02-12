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
    public $employee;
    public $minutes;
    public $materials;

    public function mount()
    {
        $this->minutes = Minute::where('user_id', $this->employee->user_id)
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

        $this->materials = Material::where('user_id', $this->employee->user_id)
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
