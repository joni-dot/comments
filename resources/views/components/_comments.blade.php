<div>
    <ul>
        @foreach($comments as $comment)
            <x-comments::comment  
                :comment="$comment" 
                :editableCommentId="$editableCommentId" 
            />
        @endforeach
    </ul>
</div>