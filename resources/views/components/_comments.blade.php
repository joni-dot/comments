<div>
    <ul>
        @foreach($comments as $comment)
            <x-comments::comment  
                :model="$model"
                :comment="$comment" 
                :editableCommentId="$editableCommentId" 
            />
        @endforeach
    </ul>
</div>