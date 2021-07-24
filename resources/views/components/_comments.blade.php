<div>
    <ul>
        @foreach($comments as $comment)
            <x-comments::comment  
                :model="$model"
                :comment="$comment" 
                :editableCommentId="$editableCommentId"
                :showUser="$showUser"
            />
        @endforeach
    </ul>
</div>