<?php

namespace App\Livewire\Clientes;

use Livewire\Component;

class Index extends Component
{
 public $clienteId;
    public $nome;
    public $email;
    public $telefone;

    public function mount($id)
    {
        $cliente = Cliente::findOrFail($id);
        $this->clienteId = $cliente->id;
        $this->nome = $cliente->nome;
        $this->email = $cliente->email;
        $this->telefone = $cliente->telefone;
    }

    public function atualizar()
    {
        $this->validate([
            'nome' => 'required|string',
            'email' => 'required|email',
            'telefone' => 'nullable|string'
        ]);

        $cliente = Cliente::findOrFail($this->clienteId);
        $cliente->update([
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone
        ]);

        session()->flash('mensagem', 'Cliente atualizado com sucesso!');
        return redirect()->route('clientes.index');
    }


    public function render()
    {
        return view('livewire.clientes.index');
    }
}
