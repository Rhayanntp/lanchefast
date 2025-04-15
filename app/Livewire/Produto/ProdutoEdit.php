<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $produtoId, $nome, $ingredientes, $valor, $imagem;

    public function mount($id)
    {
        $produto = Produto::findOrFail($id);

        $this->produtoId = $produto->id;
        $this->nome = $produto->nome;
        $this->ingredientes = $produto->ingredientes;
        $this->valor = $produto->valor;
        $this->imagem = $produto->imagem;
    }

    // Função para atualizar o produto
    public function update()
    {
        $this->validate([
            'nome' => 'required|string|max:255',
            'ingredientes' => 'required|string',
            'valor' => 'required|numeric',
            'imagem' => 'nullable|image|max:1024', // Limite de 1MB para imagem
        ]);

        if ($this->imagem) {
            $imagemPath = $this->imagem->store('produtos', 'public');
        }

        $produto = Produto::findOrFail($this->produtoId);
        $produto->update([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $imagemPath ?? $produto->imagem,
        ]);

        session()->flash('message', 'Produto atualizado com sucesso!');
        return redirect()->route('produtos.index');
    }

    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
