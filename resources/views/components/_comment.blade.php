<li class="text-sm p-4 mb-4 shadow border-solid border-gray-400 rounded">
    <div class="border-solid shadow py-2 px-2 mb-4">
        <div class="flex">
            <div class="flex-1 text-left">
                @if ($showUser)
                    <span>
                        <span class="mr-1">@svg('user', 'fill-current w-4 h-4 mr-1 ml-0 inline')</span>
                        <strong>{{ $comment->user->name }}</strong> commented:
                    </span>
                @endif
            </div>
            <div class="flex-1 text-right">
                @if ($model->authorizeUpdateComment($comment->id)) 
                    <span class="text-gray-700 mr-1">
                        <span 
                            wire:click="editComment('{{ $comment->id }}')" 
                            wire:loading.remove
                            wire:target="editComment('{{ $comment->id }}')"
                        >
                            @svg('edit-pencil', 'fill-current w-4 h-4 mr-1 ml-0 inline')
                        </span>
                        <span 
                            wire:loading
                            wire:target="editComment('{{ $comment->id }}')"
                        >
                            @svg('refresh', 'animate-spin fill-current w-4 h-4 mr-1 ml-0 inline')
                        </span>
                    </span>
                @endif
                @if ($model->authorizeRemoveComment($comment->id)) 
                    <span class="text-gray-700">
                        <span 
                            wire:click="removeComment('{{ $comment->id }}')" 
                            wire:loading.remove
                            wire:target="removeComment('{{ $comment->id }}')"
                        >
                            @svg('trash', 'fill-current w-4 h-4 mr-1 ml-0 inline')
                        </span>
                        <span 
                            wire:loading
                            wire:target="removeComment('{{ $comment->id }}')"
                        >
                            @svg('refresh', 'animate-spin fill-current w-4 h-4 mr-1 ml-0 inline')
                        </span>
                    </span>
                @endif
            </div>
        </div>
    </div>
    @if ($comment->id != $editableCommentId)
        {{ $comment->comment }}
    @else
        <div x-data="{ 
            count: {{ mb_strlen($comment->comment) }},
            comment: '{{ $comment->comment }}', 
            countComment: function () {
                this.count = this.comment.length;
            },
        }">
            <textarea 
                class="my-2 w-full rounded border shadow"
                id="editableComment"
                name="editableComment"
                wire:model.defer="editableComment"
                x-model="comment"
                x-on:keyUp="countComment()"
            >{{ $comment->comment }}</textarea>
            <div class="mb-2 text-right">
                <span class="bg-blue-600 text-white text-sm py-1 px-2 rounded-xl">
                    <strong x-text="count">
                        {{ mb_strlen($comment->comment) }}
                    </strong> characters...
                </span>
            </div>
        </div>
        <button 
            wire:click="updateComment('{{ $comment->id }}')"
            wire:loading.attr="disabled"
            class="shadow rounded bg-blue-600 py-1 px-2 text-white disabled"
        >
            <span
                wire:loading.remove
                wire:target="updateComment('{{ $comment->id }}')"
            >
                Update comment</span>
            <span 
                wire:loading
                wire:target="updateComment('{{ $comment->id }}')"
            >
                @svg('refresh', 'animate-spin fill-current w-4 h-4 mr-1 ml-0 inline')
            </span>
        </button>   
    @endIf
</li>