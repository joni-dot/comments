<x-comments::container>
    <x-comments::comments 
        :comments="$comments"
        :editableCommentId="$editableCommentId" 
    />
    <x-comments::form />
</x-comments::container>