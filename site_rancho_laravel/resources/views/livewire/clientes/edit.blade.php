<div class="container mt-5">
    <h2 class="text-primary">Editar Cliente</h2>

    <form wire:submit.prevent="atualizar">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" class="form-control" wire:model="nome">
            @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Telefone</label>
            <input type="text" class="form-control" wire:model="telefone">
            @error('telefone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
