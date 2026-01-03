<?php

namespace App\Livewire\Avaliacoes;

use Livewire\Component;

class Edit extends Component
{
     public $avaliacaoId, $nome, $nota, $comentario;

    protected $rules = [
        'nome' => 'required|string|max:255',
        'nota' => 'required|integer|min:1|max:5',
        'comentario' => 'nullable|string',
    ];

    public function mount($id)
    {
        $avaliacao = Avaliacao::findOrFail($id);
        $this->avaliacaoId = $avaliacao->id;
        $this->nome = $avaliacao->nome;
        $this->nota = $avaliacao->nota;
        $this->comentario = $avaliacao->comentario;
    }

    public function update()
    {
        $this->validate();
        $avaliacao = Avaliacao::findOrFail($this->avaliacaoId);
        $avaliacao->update([
            'nome' => $this->nome,
            'nota' => $this->nota,
            'comentario' => $this->comentario,
        ]);

        session()->flash('message', 'Avaliação atualizada com sucesso!');
        return redirect()->route('avaliacoes.index');
    }
    public function render()
    {
        return view('livewire.avaliacoes.edit');
    }
}
