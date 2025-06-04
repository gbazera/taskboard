<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Header extends Component{

    #[Rule('required|string|max:255')]
    public $title = '';

    #[Rule('string|max:1000')]
    public $description = '';

    #[Rule('required|in:To Do,In Progress,Done')]
    public $status = 'To Do';

    public function createTask(){

        $validated = $this->validate();

        if(Auth::user()->tasks()->create($validated)){

            $this->reset(['title', 'description']);

            $this->redirect(route('home'), true);
        }
    }

    public function render() { return view('livewire.header'); }
}
