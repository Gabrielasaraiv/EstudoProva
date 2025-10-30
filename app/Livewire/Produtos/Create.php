<?php

namespace App\Livewire\Produtos;

use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $descricao;
    public $preco;
    public $quantidade;
    public $quantidade_minima;

    protected $rules = [
        'nome'=> 'required|min:5|max:100',
        'descricao'=> 'max:255',
        'preco'=> 'required|decimal',
        'quantidade'=> 'required|integer',
        'quantidade_minima'=> 'required|integer'
    ];

    protected $messages = [
        'nome.required' => 'O campo é obrigatório',
        'nome.min'=> 'O nome deve ter no mínimo 5 caracteres.',
        'nome.max'=> 'O nome deve ter no máximo 100 caracteres.',
        'descricao'=> 'A descrição deve ter no máximo 255 caracteres.',
        'preco.required' => 'O campo é obrigatório',
        'preco.decimal'=> 'O pre'
    ];
    

    public function render()
    {
        return view('livewire.produtos.create');
    }
}
