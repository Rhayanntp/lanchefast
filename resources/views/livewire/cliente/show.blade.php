<div class="container">
    <h1>Detalhes do Cliente</h1>

    @if ($cliente)
        <div class="card">
            <div class="card-header">
                <h2>{{ $cliente->nome }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Endereço:</strong> {{ $cliente->endereco }}</p>
                <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
                <p><strong>CPF:</strong> {{ $cliente->cpf }}</p>
                <p><strong>Email:</strong> {{ $cliente->email }}</p>
                <p><strong>Data de Cadastro:</strong> {{ $cliente->created_at->format('d/m/Y') }}</p>
            </div>
        </div>
    @else
        <p>Cliente não encontrado.</p>
    @endif
</div>
