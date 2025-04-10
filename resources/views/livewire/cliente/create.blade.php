<div>
    <h1 class="mb-4">Cadastro de Cliente</h1>

    <!-- Formulário de cadastro -->
    <form wire:submit.prevent="cadastrar">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" class="form-control" wire:model="nome" required>
        </div>

        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" class="form-control" wire:model="endereco" required>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" class="form-control" wire:model="telefone" required>
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" class="form-control" wire:model="cpf" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" wire:model="email" required>
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" id="senha" class="form-control" wire:model="senha" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
    </form>

    <!-- Lista de usuários cadastrados -->
    <h2 class="mt-5">Cliente Cadastrados</h2>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->endereco }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
