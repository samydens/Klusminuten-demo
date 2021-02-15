<?php

namespace App\Http\Livewire\Company;

use Livewire\Component;
use App\Models\Company;

class ChooseCompany extends Component
{
    public $query;

    public function setCompany($id)
    {
        auth()->user()->company_id = $id;
        auth()->user()->save();

        return redirect()->to('/home');

        // Later moet dit een verzoek maken.
    }

    public function render()
    {
        $query = '%'.$this->query.'%';

        return view('livewire.company.choose-company', [
            'companies' => Company::where('name', 'like', $query)->get(),
        ])
            ->extends('layouts.admin')
            ->section('content');
    }
}
