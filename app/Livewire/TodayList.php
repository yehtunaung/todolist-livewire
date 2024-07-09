<?php

namespace App\Livewire;

use App\Http\Requests\TodayListRequest;
use App\Models\Todal;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class TodayList extends Component
{

    use WithPagination;
    public $name;
    public $search;
    protected $rules = [
        'name' => 'required|min:6',
    ];
    public function create()
    {
        $validatedData = $this->validate();
        Todal::create($validatedData);
        $this->reset('name');
        session()->flash('success' ,'Create Success.');
    }
    public function delete(Todal $todal)
    {
        $todal = $todal->delete();
    }
    public function render()
    {
        
        return view('livewire.today-list',[
            'todas'=>Todal::latest()->where('name','like',"%{$this->search}%")->paginate(5)
        ]);
    }
}
