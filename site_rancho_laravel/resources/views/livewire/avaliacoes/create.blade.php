@extends('layouts.app')

@section('content')
<h1>Nova Avaliação</h1>

<form action="{{ route('avaliacoes.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="cliente_nome" class="form-label">Nome do Cliente</label>
        <input type="text" name="cliente_nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="nota" class="form-label">Nota (1-5)</label>
        <input type="number" name="nota" min="1" max="5" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="comentario" class="form-label">Comentário</label>
        <textarea name="comentario" class="form-control" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection
