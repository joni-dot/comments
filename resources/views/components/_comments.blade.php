<div>
    <ul>
        @foreach($comments as $comment)
            <x-comments::comment  :comment="$comment" />
        @endforeach
    </ul>
</div>