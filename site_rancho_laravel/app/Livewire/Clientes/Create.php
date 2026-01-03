<?php

namespace App\Livewire\Clientes;

use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $email;
    public $telefone;

    public function salvar()
    {
        $this->validate([
            'nome' => 'required|string',
            'email' => 'required|email',
            'telefone' => 'nullable|string'
        ]);

        Cliente::create([
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone
        ]);

        session()->flash('mensagem', 'Cliente criado com sucesso!');
        return redirect()->route('clientes.index');
    }
    public function render()
    {
        return view('livewire.clientes.create');
    }
}
