<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ProdutoCreate extends Component
{
    use WithFileUploads;

    public $nome;
    public $ingredientes;
    public $valor;
    public $imagem;

    protected $rules = [
        'nome' => 'required|string|max:255',
        'ingredientes' => 'required|string',
        'valor' => 'required|numeric|min:0',
        'imagem' => 'nullable|image|max:2048', // até 2MB
    ];

    public function save()
    {
        $this->validate();

        $path = $this->imagem?->store('produtos', 'public');

        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $path,
        ]);

        session()->flash('success', 'Produto criado com sucesso!');

        return redirect()->route('produtos.index');
    }

    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
