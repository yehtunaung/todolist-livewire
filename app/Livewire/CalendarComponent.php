<?php

namespace App\Livewire;

use Livewire\Component;

class CalendarComponent extends Component
{
    public $title = "Calendar";
    public function render()
    {
        return view('livewire.calendar-component');
    }
}
