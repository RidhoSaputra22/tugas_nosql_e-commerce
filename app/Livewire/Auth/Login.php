<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    public function login()
    {
        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ])) {
            session()->flash('status', 'Anda berhasil login');
            return redirect('/');
        } else {
            $this->addError('error', 'Email atau password salah');
        }
    }

    public function mount()
    {
        if (Auth::check()) {
            session()->flash('status', 'Anda sudah login');
            return redirect('/');
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app');
    }
}
