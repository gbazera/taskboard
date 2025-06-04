<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Register extends Component{

    #[Rule('required|string|max:255|min:3')]
    public $name;

    #[Rule('required|email|unique:users|min:5')]
    public $email;

    #[Rule('required|string|min:8|confirmed')]
    public $password;
    public $password_confirmation;

    public function register(){

        $validated = $this->validate();

        $user = User::create($validated);

        Auth::login($user);

        $this->redirect(route('home'), true);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
