<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use Livewire\Component;

class Show extends Component
{
    public $clienteId;

    public $cliente;

    // Método para carregar o cliente
    public function mount($id)
    {
        $this->clienteId = $id;
        $this->cliente = Cliente::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.cliente.show');
    }
}
