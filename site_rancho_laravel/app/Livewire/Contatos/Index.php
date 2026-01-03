<?php

namespace App\Livewire\Contatos;

use Livewire\Component;

class Index extends Component
{
     public $contatos;

    public function render()
    {
         $this->contatos = Contato::all();
        return view('livewire.contatos.index');
    }
}
