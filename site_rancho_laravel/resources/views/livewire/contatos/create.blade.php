<div class="p-6 bg-blue-50 rounded shadow">
    <h2 class="text-xl font-bold text-blue-700 mb-4">Criar Contato</h2>

    <form wire:submit.prevent="store" class="space-y-4">
        <input type="text" wire:model="nome" placeholder="Nome" class="w-full px-3 py-2 border rounded"/>
        <input type="email" wire:model="email" placeholder="Email" class="w-full px-3 py-2 border rounded"/>
        <textarea wire:model="mensagem" placeholder="Mensagem" class="w-full px-3 py-2 border rounded"></textarea>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Salvar</button>
    </form>
</div>

