<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;

class AdminEmployeeDetails extends Component
{
    public $employeeRecord; // From DB.
    public $employee = []; // input model array.
    public $showSubmit = False; // boolean for submit button

    public function mount($employeeId)
    {
        // Get record with passed employeeid
        $this->employeeRecord = Employee::find($employeeId);

        $employee = $this->employeeRecord;

        // Assign db values to input model array.
        $this->employee['name'] = $employee->name;
        $this->employee['vakman_id'] = $employee->vakman_id;
        $this->employee['phone_number'] = $employee->phone_number;
    }

    public function submit()
    {
        $this->employeeRecord->name = $this->employee['name'];
        $this->employeeRecord->vakman_id = $this->employee['vakman_id'];
        $this->employeeRecord->phone_number = $this->employee['phone_number'];

        // Save collection to DB.
        $this->employeeRecord->save();

        // reset showsubmit
        $this->reset('showSubmit');

        // flash succes message.
        session()->flash('message', 'wijzigingen opgeslagen');
    }

    public function updatedEmployee()
    {
        // When user changes a value show submit button.
        $this->showSubmit = True;
    }

    public function render()
    {
        return view('livewire.admin-employee-details');
    }
}
