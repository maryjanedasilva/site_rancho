<?php

namespace App\Livewire\Avaliacoes;

use Livewire\Component;

class Index extends Component
{
     public $avaliacoes;

    public function render()
    {
        $this->avaliacoes = Avaliacao::all();
        return view('livewire.avaliacoes.index');
    }
}
