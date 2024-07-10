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
    public $editingName;
    public $editingId;
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

    public function edit($id)
    {
        $todo= Todal::find($id);
        $this->editingName = $todo->name;
        $this->editingId = $todo->id;

    }

    public function update($id)
    {
       Todal::find($this->editingId)->update(
        [
            'name' => $this->editingName
        ]
       );
       $this->cancel();
    }

    public function cancel()
    {
        $this->reset('editingId','editingName');
    }
    public function toggle($todoId)
    {
        $todo = Todal::find($todoId);
        $todo->complete = !$todo->complete;
        $todo->save();
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
