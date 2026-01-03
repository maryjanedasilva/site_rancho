@extends('layouts.app')

@section('content')
<h1>Avaliações</h1>
<a href="{{ route('avaliacoes.create') }}" class="btn btn-primary mb-3">Nova Avaliação</a>

<table class="table table-striped">
    <thead class="table-primary">
        <tr>
            <th>Cliente</th>
            <th>Nota</th>
            <th>Comentário</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($avaliacoes as $avaliacao)
        <tr>
            <td>{{ $avaliacao->cliente_nome }}</td>
            <td>{{ $avaliacao->nota }}</td>
            <td>{{ $avaliacao->comentario }}</td>
            <td>
                <a href="{{ route('avaliacoes.edit', $avaliacao->id) }}" class="btn btn-sm btn-warning">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
