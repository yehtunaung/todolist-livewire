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
        $validate = $this->validate();
        \App\Models\User::create($validate);
        $this->reset('name','email','password','phone_no');
        session()->flash('success' , 'User Created!');

    }
    public function render()
    {
        return view('livewire.user');
    }
}
