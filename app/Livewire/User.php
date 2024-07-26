<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Livewire\Attributes\Rule;
use Livewire\Component;

class User extends Component
{
    #[Rule('required|max:50')]
    public $name;
    #[Rule('required|max:50')]
    public $email;
    #[Rule('required|max:50')]
    public $password;
    #[Rule('required|max:50')]
    public $phone_no;

    public function create()
    {
        sleep(1);
        $validate = $this->validate();
        $user = \App\Models\User::create($validate);
        $this->reset('name','email','password','phone_no');
        session()->flash('success' , 'User Created!');
        $this->dispatch('user-created',$user);

    }

    public function render()
    {
        $userLists = \App\Models\User::latest()->paginate(5);
        return view('livewire.user');
    }
}
