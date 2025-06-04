<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;
use PhpOption\None;

class Login extends Component{

    #[Rule('required|email')]
    public $email;
    
    #[Rule('required|string')]
    public $password;

    public function login(){
        $validated = $this->validate();

        if(Auth::attempt($validated)){
            session()->regenerate();

            $this->redirect(route('home'), true);
        }

        throw ValidationException::withMessages([
            'credentials' => 'The provided credentials do not match our records.',
        ]);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
