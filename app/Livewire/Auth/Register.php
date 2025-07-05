<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $nama;
    public $email;
    public $password;

    public function register()
    {
        $this->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        try {
            User::create([
                'name' => $this->nama,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
            session()->flash('status', 'Anda berhasil register');
            return redirect('/login');
        } catch (\Exception $e) {
            $this->addError('error', $e->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app');
    }
}