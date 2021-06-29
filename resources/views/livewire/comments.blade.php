<div class="h-100 w-full flex bg-teal-lightest shadow">
    <div class="bg-white rounded shadow w-full p-6">
        <div>
            <ul>
                @foreach($comments as $comment)
                    <li class="p-2">{{ $comment->comment }}</li>
                @endforeach
            </ul>
        </div>
        <div>
            <textarea 
                class="my-2 w-full rounded border shadow"
                id="comment"
                name="comment"
                wire:model.defer="comment"
            ></textarea>
            <x-form.input-error :name="'comment'" :text="'comment'"/>
            <button 
                wire:click="addComment()"
                wire:loading.attr="disabled"
                class="shadow rounded bg-blue-600 py-2 px-4 text-white disabled"
            >
                <span wire:loading.remove>Add comment</span>
                <span wire:loading>@svg('refresh', 'animate-spin fill-current w-4 h-4 mr-1 ml-0 inline')</span>
            </button>
        </div>
    </div>
</div>