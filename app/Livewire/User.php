<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Rule;
use Livewire\Component;

class User extends Component
{
    public $name;
    public $email;
    public $password;
    public $phone_no;
    public $photo;

    protected $rules = [
        'name' => 'required|max:50|min:10',
        'email' => 'required|max:50|email',
        'password' => 'required|max:50|min:8',
        'phone_no' => 'required|max:50',
        'photo' => 'nullable|image|max:1024' // Optional rule for profile picture
    ];

    public function mount()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->phone_no = '';
    }

    // public function mount()
    // {
    //     $this->name = '';
    // }
    // public function hydrate()
    // {
    //     dump("hydrate!");
    // }
    // public function boot()
    // {
    //     dump("Boot !");
    // }

    // public function updating($property , $value)
    // {
    //     dump("Updating {$property}");
    // }

    // public function updated($name)
    // {
    //     if ($name === 'name') {
    //         Log::info('Updated name property.');
    //         $this->name = strtoupper($this->name);
    //     }
    // }
    
    public function updatedName($name)
    {
                    Log::info('Updated name property.');
                    $this->name = strtoupper($this->name);
    }
    // public function rendering()
    // {
    //     dump("redering");
    // }

    public function create()
    {
        sleep(1);
        $validate = $this->validate();
        $user = \App\Models\User::create($validate);
        $this->reset('name', 'email', 'password', 'phone_no');
        session()->flash('success', 'User Created!');
        $this->dispatch('user-created', $user);
    }

    public function render()
    {
        $userLists = \App\Models\User::latest()->paginate(5);
        return view('livewire.user');
    }
}
