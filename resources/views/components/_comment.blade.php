<li class="text-sm p-4 mb-4 shadow border-solid border-gray-400 rounded">
    <div class="border-solid shadow py-2 px-2 mb-2 text-right">
        <span class="text-gray-700 mr-1">
            <span wire:click="editComment('{{ $comment->id }}')" wire:loading.remove>@svg('edit-pencil', 'fill-current w-4 h-4 mr-1 ml-0 inline')</span>
            <span wire:loading>@svg('refresh', 'animate-spin fill-current w-4 h-4 mr-1 ml-0 inline')</span>
        </span>
        <span class="text-gray-700">
            <span wire:click="removeComment('{{ $comment->id }}')" wire:loading.remove>@svg('trash', 'fill-current w-4 h-4 mr-1 ml-0 inline')</span>
            <span wire:loading>@svg('refresh', 'animate-spin fill-current w-4 h-4 mr-1 ml-0 inline')</span>
        </span>
    </div>
    @if ($comment->id != $editableCommentId)
        {{ $comment->comment }}
    @else
        <textarea 
            class="my-2 w-full rounded border shadow"
            id="editableComment"
            name="editableComment"
            wire:model.defer="editableComment"
        >{{ $comment->comment }}</textarea>
        <button 
            wire:click="updateComment('{{ $comment->id }}')"
            wire:loading.attr="disabled"
            class="shadow rounded bg-blue-600 py-1 px-2 text-white disabled"
        >
            <span wire:loading.remove>Update comment</span>
            <span wire:loading>@svg('refresh', 'animate-spin fill-current w-4 h-4 mr-1 ml-0 inline')</span>
        </button>   
    @endIf
</li>