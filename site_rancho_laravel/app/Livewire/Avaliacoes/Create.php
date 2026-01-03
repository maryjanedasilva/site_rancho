<?php

namespace App\Livewire\Avaliacoes;

use Livewire\Component;

class Create extends Component
{
     public $nome, $nota, $comentario;

    protected $rules = [
        'nome' => 'required|string|max:255',
        'nota' => 'required|integer|min:1|max:5',
        'comentario' => 'nullable|string',
    ];

    public function save()
    {
        $this->validate();
        Avaliacao::create([
            'nome' => $this->nome,
            'nota' => $this->nota,
            'comentario' => $this->comentario,
        ]);

        session()->flash('message', 'Avaliação criada com sucesso!');
        return redirect()->route('avaliacoes.index');
    }

    public function render()
    {
        return view('livewire.avaliacoes.create');
    }
}
