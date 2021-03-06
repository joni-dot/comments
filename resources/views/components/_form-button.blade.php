<button 
    wire:click="addComment()"
    wire:loading.attr="disabled"
    class="shadow rounded bg-blue-600 py-2 px-4 text-white disabled"
>
    <span 
        wire:loading.remove
        wire:target="addComment()"
    >
        Add comment
    </span>
    <span 
        wire:loading
        wire:target="addComment()"
    >
        @svg('refresh', 'animate-spin fill-current w-4 h-4 mr-1 ml-0 inline')
    </span>
</button>
