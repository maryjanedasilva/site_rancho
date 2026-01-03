<?php

namespace App\Livewire\Clientes;

use Livewire\Component;

class Edit extends Component
{
     public $clienteId, $nome, $email, $telefone;

    protected $rules = [
        'nome' => 'required|string|max:255',
        'email' => 'required|email|unique:clientes,email',
        'telefone' => 'nullable|string|max:20',
    ];

    public function mount($id)
    {
        $cliente = Cliente::findOrFail($id);
        $this->clienteId = $cliente->id;
        $this->nome = $cliente->nome;
        $this->email = $cliente->email;
        $this->telefone = $cliente->telefone;
    }

    public function update()
    {
        $this->validate();
        $cliente = Cliente::findOrFail($this->clienteId);
        $cliente->update([
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone,
        ]);

        session()->flash('message', 'Cliente atualizado com sucesso!');
        return redirect()->route('clientes.index');
    }

    public function render()
    {
        return view('livewire.clientes.edit');
    }
}
