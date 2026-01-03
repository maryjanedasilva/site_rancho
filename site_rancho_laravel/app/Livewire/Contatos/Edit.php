<?php

namespace App\Livewire\Contatos;

use Livewire\Component;

class Edit extends Component
{
     public $contatoId, $nome, $email, $mensagem;

    protected $rules = [
        'nome' => 'required|string|max:255',
        'email' => 'required|email',
        'mensagem' => 'required|string',
    ];

    public function mount($id)
    {
        $contato = Contato::findOrFail($id);
        $this->contatoId = $contato->id;
        $this->nome = $contato->nome;
        $this->email = $contato->email;
        $this->mensagem = $contato->mensagem;
    }

    public function update()
    {
        $this->validate();
        $contato = Contato::findOrFail($this->contatoId);
        $contato->update([
            'nome' => $this->nome,
            'email' => $this->email,
            'mensagem' => $this->mensagem,
        ]);

        session()->flash('message', 'Contato atualizado com sucesso!');
        return redirect()->route('contatos.index');
    }

    public function render()
    {
        return view('livewire.contatos.edit');
    }
}
