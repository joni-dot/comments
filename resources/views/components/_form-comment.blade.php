<div x-data="{ 
    count: 0,
    comment: '', 
    countComment: function () {
        this.count = this.comment.length;
    },
}">
    <textarea 
        class="my-2 w-full rounded border shadow"
        id="comment"
        name="comment"
        wire:model.defer="comment"
        x-model="comment"
        x-on:keyUp="countComment()"
    ></textarea>
    <div class="mb-2 text-right">
        <span class="bg-blue-600 text-white text-sm py-1 px-2 rounded-xl">
            <strong x-text="count">0</strong> characters...
        </span>
    </div>
</div>