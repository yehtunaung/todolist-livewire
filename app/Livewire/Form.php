<?php

namespace App\Livewire;

use App\Models\Company;
use App\Models\Phone;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Form extends Component
{
    public $companyID;
    public $phoneID;
    #[Computed()]
    public function companies()
    {
        $companies = Company::all();
        return $companies;
    }
    #[Computed()]
    public function phones()
    {
        return Phone::where('company_id' , $this->companyID)->get();
    }
    public function render()
    {
        return view('livewire.form');
    }
}
