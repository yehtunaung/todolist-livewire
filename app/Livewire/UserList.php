<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    public $search = '';

    use WithPagination;
    #[On('user-created')]
    // public function mount($search)
    // {
    //     $this->search = $search;
    // }
    // public function updateList($user = null)
    // {
        
    // }
    public function render()
    {
        $userLists = User::latest()->where('name','like',"%{$this->search}%")->paginate(5);
        return view('livewire.user-list', compact('userLists'));
    }
}
