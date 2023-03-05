<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginForm extends Component
{
    public $tipo = '';
    public function mount($tipo)
    {
        $this->tipo = $tipo;
    }
    public function render()
    {
        return view('livewire.login-form');
    }

    public function loginMotorista()
    {
        # code...
    }
    public function loginCobrador()
    {
        # code...
    }
    public function loginDono()
    {
        # code...
    }
    public function loginDeveloper()
    {
        # code...
    }

    public function loginCliente()
    {
        # code...
    }
}
