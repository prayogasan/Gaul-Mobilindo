<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class LoginViewIndex extends Component
{
    public $page_title = 'Login | Gaul Mobilindo';

    public function render()
    {
        return view('livewire.auth.login-view-index')
                ->extends('layouts.auth')
                ->section('content');
    }
}
