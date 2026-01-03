<div class="p-6 bg-blue-50 rounded shadow">
    <h2 class="text-2xl font-bold text-blue-700 mb-4">Lista de Contatos</h2>

    <button wire:click="$emit('openCreate')" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">Novo Contato</button>

    <table class="w-full table-auto bg-white rounded shadow">
        <thead class="bg-blue-200 text-blue-800">
            <tr>
                <th class="px-4 py-2">Nome</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Mensagem</th>
                <th class="px-4 py-2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contatos as $contato)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $contato->nome }}</td>
                <td class="px-4 py-2">{{ $contato->email }}</td>
                <td class="px-4 py-2">{{ $contato->mensagem }}</td>
                <td class="px-4 py-2">
                    <button wire:click="$emit('openEdit', {{ $contato->id }})" class="bg-blue-400 text-white px-2 py-1 rounded">Editar</button>
                    <button wire:click="delete({{ $contato->id }})" class="bg-red-400 text-white px-2 py-1 rounded">Excluir</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

