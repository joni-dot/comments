<li class="text-sm p-4 mb-4 shadow border-solid border-gray-400 rounded">
    <div class="border-solid shadow py-2 px-2 mb-2 text-right">
        <span class="text-gray-700">
            <span wire:click="removeComment('{{ $comment->id }}')" wire:loading.remove>@svg('trash', 'fill-current w-4 h-4 mr-1 ml-0 inline')</span>
            <span wire:loading>@svg('refresh', 'animate-spin fill-current w-4 h-4 mr-1 ml-0 inline')</span>
        </span>
    </div>
    {{ $comment->comment }}
</li>