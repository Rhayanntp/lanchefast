<div class="container">
    <h1>Editar Produto</h1>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="update">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" wire:model="nome" required>
        </div>

        <div class="form-group">
            <label for="ingredientes">Ingredientes</label>
            <textarea class="form-control" id="ingredientes" wire:model="ingredientes" required></textarea>
        </div>

        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" id="valor" wire:model="valor" required>
        </div>

        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type="file" class="form-control" id="imagem" wire:model="imagem">
            @if ($imagem)
                <img src="{{ $imagem->temporaryUrl() }}" class="mt-2" width="100" />
            @endif
        </div>

        <button type="submit" class="btn btn-primary mt-3">Atualizar Produto</button>
    </form>
</div>