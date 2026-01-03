<?php

namespace App\Livewire\Contatos;

use Livewire\Component;

class Create extends Component
{
     public $nome, $email, $mensagem;

    protected $rules = [
        'nome' => 'required|string|max:255',
        'email' => 'required|email',
        'mensagem' => 'required|string',
    ];

    public function save()
    {
        $this->validate();
        Contato::create([
            'nome' => $this->nome,
            'email' => $this->email,
            'mensagem' => $this->mensagem,
        ]);

        session()->flash('message', 'Contato enviado com sucesso!');
        return redirect()->route('contatos.index');
    }

    public function render()
    {
        return view('livewire.contatos.create');
    }
}
