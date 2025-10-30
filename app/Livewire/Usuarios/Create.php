<?php

namespace App\Livewire\Usuarios;

use App\Models\Produtos;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required|max:100|min:5',
        'email' => 'required|min:5|email',
        'password' => 'required|min:5'
    ];

    protected $messages = [
        'name.required'=> 'O campo é obrigatório.',
        'name.max'=> 'O campo deve ter no máximo 100 caracteres.',
        'name.min'=> 'O campo deve ter no mínimo 5 caracteres.',
        'email.required'=> 'O campo é obrigatório.',
        'email.min'=> 'O campo deve ter no mínimo 5 caracteres.',
        'email.email'=> 'O formato de email está incorreto.',
        'password.required'=> 'O campo é obrogatório.',
        'password.min'=> 'O campo deve ter no mínimo 5 caracteres.'
    ];

    public function store(){
        $this->validate();

        $usuario = User::create([
            'name'=> $this->name,
            'email'=>$this->email,
            'password'=> Hash::make($this->password)
        ]);

        session()->flash('message', 'Cadastro Realizado');
       
    }


    public function render()
    {
        return view('livewire.usuarios.create');
    }
}
