<x-comments::container>
    <x-comments::comments 
        :model="$model"
        :comments="$comments"
        :editableCommentId="$editableCommentId"
        :showUser="$showUser"
    />
    <x-comments::form />
</x-comments::container>